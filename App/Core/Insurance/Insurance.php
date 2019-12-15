<?php

namespace InsuranceCalculator\App\Core\Insurance;

abstract class Insurance
{
    /**
     * Insurance constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $value
     * @param $percent
     * @return float|int
     */
    public function calculatePercent($value, $percent)
    {
        return $value * $percent / 100;
    }
}