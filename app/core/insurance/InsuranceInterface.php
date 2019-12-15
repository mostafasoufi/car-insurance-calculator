<?php

namespace InsuranceCalculator\App\Core\Insurance;


interface InsuranceInterface
{
    /**
     * InsuranceInterface constructor.
     * @param $value
     * @param $tax
     * @param $instalment
     * @param bool $time
     */
    public function __construct($value, $tax, $instalment, $time = false);

    /**
     * @return mixed
     */
    public function validate();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return mixed
     */
    public function getBase();

    /**
     * @return mixed
     */
    public function getTax();

    /**
     * @return mixed
     */
    public function getCommission();

    /**
     * @return mixed
     */
    public function getInstalment();

    /**
     * @return mixed
     */
    public function getBasePrice();

    /**
     * @return mixed
     */
    public function getCommissionPrice();

    /**
     * @return mixed
     */
    public function getTaxPrice();

    /**
     * @return mixed
     */
    public function getTotalPrice();

    /**
     * @return mixed
     */
    public function getInstalmentsPrice();

    /**
     * @return mixed
     */
    public function hasError();

    /**
     * @return mixeds
     */
    public function getError();
}