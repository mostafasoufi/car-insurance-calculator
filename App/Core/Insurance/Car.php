<?php

namespace InsuranceCalculator\App\Core\Insurance;

use DateTime;

class Car extends Insurance implements InsuranceInterface
{
    /**
     * @var Value
     */
    private $value;

    /**
     * @var Tax
     */
    private $tax;

    /**
     * @var Instalment
     */
    private $instalment;

    /**
     * @var Error
     */
    private $error;

    /**
     * @var int Base Percent
     */
    private $basePercent;

    /**
     * @var int Commission Percent
     */
    private $commissionPercent;

    /**
     * @var bool User Time
     */
    private $userTime;

    /**
     * Insurance constructor.
     * @param $value
     * @param $tax
     * @param $instalment
     * @param bool $time
     * @throws \Exception
     */
    public function __construct($value, $tax, $instalment, $time = false)
    {
        parent::__construct();

        $this->value = $value;
        $this->tax = $tax;
        $this->instalment = $instalment;
        $this->userTime = $time;

        $this->basePercent = 11;
        $this->commissionPercent = 17;

        $this->validate();
        $this->modifyBasePercent();
    }

    /**
     * Validate the inputs.
     */
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

    /**
     * Modify the base percent in a Monday 15:20
     * @throws \Exception
     */
    private function modifyBasePercent()
    {
        $date = new DateTime();

        if ($this->userTime) {
            $date->setTimestamp($this->userTime);
        }

        if ($date->format('l') == 'Friday' and $date->format('H-m') == '15-20') {
            $this->basePercent = 13;
        }
    }

    /**
     * Get value.
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get base.
     * @return int
     */
    public function getBase()
    {
        return $this->basePercent;
    }

    /**
     * get Tax.
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Get commission.
     * @return int
     */
    public function getCommission()
    {
        return $this->commissionPercent;
    }

    /**
     * Get instalment.
     * @return mixed
     */
    public function getInstalment()
    {
        return $this->instalment;
    }

    /**
     * Get base price.
     * @return false|float
     */
    public function getBasePrice()
    {
        return round($this->calculatePercent($this->value, $this->basePercent));
    }

    /**
     * Get commission price.
     * @return false|float
     */
    public function getCommissionPrice()
    {
        return round($this->calculatePercent($this->getBasePrice(), $this->commissionPercent));
    }

    /**
     * Get tax price.
     * @return false|float
     */
    public function getTaxPrice()
    {
        return round($this->calculatePercent($this->getBasePrice(), $this->tax));
    }

    /**
     * Get total price.
     * @return false|float
     */
    public function getTotalPrice()
    {
        return round($this->getBasePrice() + $this->getCommissionPrice() + $this->getTaxPrice());
    }

    /**
     * Get instalment price.
     * @return array
     */
    public function getInstalmentsPrice()
    {
        return [
            'base' => number_format($this->getBasePrice() / $this->instalment, 2),
            'commission' => number_format($this->getCommissionPrice() / $this->instalment, 2),
            'tax' => number_format($this->getTaxPrice() / $this->instalment, 2),
            'total' => number_format($this->getTotalPrice() / $this->instalment, 2),
        ];
    }

    /**
     * Check error.
     * @return bool
     */
    public function hasError()
    {
        return $this->error ? true : false;
    }

    /**
     * Get error.
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
}