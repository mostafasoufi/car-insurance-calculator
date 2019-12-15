<?php

namespace InsuranceCalculator\App\Core\Insurance;

use Exception;

class Car extends Insurance implements InsuranceInterface
{
    private $value;
    private $tax;
    private $instalment;
    private $error;
    private $basePercent;
    private $commissionPercent;

    /**
     * Insurance constructor.
     * @param $value
     * @param $tax
     * @param $instalment
     */
    public function __construct($value, $tax, $instalment)
    {
        parent::__construct();

        $this->value = $value;
        $this->tax = $tax;
        $this->instalment = $instalment;
        $this->basePercent = 11;
        $this->commissionPercent = 17;

        $this->validate();
    }

    public function validate()
    {
        if ($this->value <= 0) {
            $this->error = 'The value should be greater than 0';
        }

        if ($this->tax < 0 or $this->tax > 100) {
            $this->error = 'The Tax be greater than 0 and less than 100';
        }

        if ($this->instalment <= 0 or $this->instalment > 12) {
            $this->error = 'The Instalment should be greater than 0 and less than 12';
        }
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getBase()
    {
        return $this->basePercent;
    }

    public function getTax()
    {
        return $this->tax;
    }

    public function getCommission()
    {
        return $this->commissionPercent;
    }

    public function getInstalement()
    {
        return $this->instalment;
    }

    public function getBasePrice()
    {
        return $this->calculatePercent($this->value, $this->basePercent);
    }

    public function getCommissionPrice()
    {
        return $this->calculatePercent($this->getBasePrice(), $this->commissionPercent);
    }

    public function getTaxPrice()
    {
        return $this->calculatePercent($this->getBasePrice(), $this->tax);
    }

    public function getTotalPrice()
    {
        return $this->getBasePrice() + $this->getCommissionPrice() + $this->getTaxPrice();
    }

    public function getInstalmentsPrice()
    {
        return [
            'base' => $this->getBasePrice() / $this->instalment,
            'commission' => $this->getCommissionPrice() / $this->instalment,
            'tax' => $this->getTaxPrice() / $this->instalment,
            'total' => $this->getTotalPrice() / $this->instalment,
        ];
    }

    public function hasError()
    {
        return $this->error ? true : false;
    }

    public function getError()
    {
        return $this->error;
    }
}