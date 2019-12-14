<?php

namespace CarInsuranceCalculator\Controller;

use CarInsuranceCalculator\Core\View;

class Form
{
    public function index()
    {
        View::render('form.php', [
            'title' => 'Car Insurance Calculate form'
        ]);
    }
}