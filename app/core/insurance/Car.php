<?php

namespace InsuranceCalculator\App\Core\Insurance;

use Exception;

class Car extends Insurance implements InsuranceInterface
{
    private $value;
    private $tax;
    private $instalment;
    private $error;

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

    public function hasError()
    {
        return $this->error ? true : false;
    }

    public function getError()
    {
        return $this->error;
    }
}