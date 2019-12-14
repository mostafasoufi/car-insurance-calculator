<?php

namespace CarInsuranceCalculator\Controller;

use CarInsuranceCalculator\Core\Helper\Input;
use CarInsuranceCalculator\Core\View;

class Car
{
    public function index()
    {
        View::render('form.php', [
            'title' => 'Car Insurance Calculate form'
        ]);
    }

    public function calculate()
    {
        try {
            $car = new Car(Input::post('car-value'), Input::post('tax-percentage'), Input::post('instalments'));
            
            View::render('calculate.php', [
                'title' => 'Car Insurance Result'
            ]);

        } catch (Exception $e) {
            View::render('error.php', [
                'title' => 'Error'
            ]);
        }
    }
}