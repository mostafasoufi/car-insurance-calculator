<?php


namespace CarInsuranceCalculator\Core\Helper;


class Input
{
    /**
     * @param bool $key
     * @return mixed
     */
    public static function post($key = false)
    {
        $value = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($key) {
            return isset($value[$key]) ? $value[$key] : false;
        }
    }

    /**
     * @param bool $key
     * @return mixed
     */
    public static function get($key = false)
    {
        $value = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

        if ($key) {
            return isset($value[$key]) ? $value[$key] : false;
        }
    }
}