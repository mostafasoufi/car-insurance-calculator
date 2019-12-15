<?php

namespace InsuranceCalculator\App\Controller;

use InsuranceCalculator\App\Core\Helper\Input;
use InsuranceCalculator\App\Core\View;
use InsuranceCalculator\App\Core\Insurance;

class Car
{
    /**
     * Car controller.
     */
    public function index()
    {
        View::render('form.php', [
            'title' => 'Car Insurance Calculate form'
        ]);
    }

    /**
     * Calculate controller.
     * @throws \Exception
     */
    public function calculate()
    {
        $title = 'Car Insurance Result';
        $car = new Insurance\Car(Input::post('car-value'), Input::post('tax-percentage'), Input::post('instalments'), Input::post('user-time'));

        if ($car->hasError()) {
            View::render('error.php', ['title' => $title, 'error' => $car->getError()]);
        }

        View::render('calculate.php', [
            'title' => $title,
            'car' => $car,
            'instalment' => $car->getInstalmentsPrice(),
        ]);
    }
}