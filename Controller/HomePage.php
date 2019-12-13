<?php

namespace CarInsuranceCalculator\Controller;

use CarInsuranceCalculator\Core\View;

class HomePage
{
    public function index()
    {
        View::render('home.php');
    }
}