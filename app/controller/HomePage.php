<?php

namespace InsuranceCalculator\App\Controller;

use InsuranceCalculator\App\Core\View;

class HomePage
{
    public function index()
    {
        View::render('home.php', [
            'title' => 'Home Page'
        ]);
    }
}