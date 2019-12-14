<?php

namespace InsuranceCalculator\App\Controller;

use InsuranceCalculator\App\Core\Helper\Input;
use InsuranceCalculator\App\Core\View;

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
        $title = 'Car Insurance Result';

        try {
            $car = new Car(Input::post('car-value'), Input::post('tax-percentage'), Input::post('instalments'));

            View::render('calculate.php', [
                'title' => $title
            ]);

        } catch (Exception $e) {
            View::render('error.php', ['title' => $title]);
        }
    }
}