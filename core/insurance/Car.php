<?php

namespace CarInsuranceCalculator\Core\Insurance;

class Car extends Insurance implements InsuranceInterface
{
    private $value;
    private $tax;
    private $instalment;

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
    }

    public function validate()
    {

    }
}