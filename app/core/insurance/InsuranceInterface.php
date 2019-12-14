<?php

namespace InsuranceCalculator\App\Core\Insurance;


interface InsuranceInterface
{
    /**
     * InsuranceInterface constructor.
     * @param $value
     * @param $tax
     * @param $instalment
     */
    public function __construct($value, $tax, $instalment);

    /**
     * @return mixed
     */
    public function validate();
}