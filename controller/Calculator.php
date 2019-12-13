<?php

namespace CarInsuranceCalculator\Controller;

use CarInsuranceCalculator\Core\View;

class Calculator
{
    public function index()
    {
        View::render('calculate.php', [
            'title' => 'Car Insurance Calculate form'
        ]);
    }
}