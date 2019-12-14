<?php

namespace CarInsuranceCalculator\Controller;

use CarInsuranceCalculator\Core\View;

class Calculate
{
    public function index()
    {
        //echo '<pre>'.print_r($_POST, 1).'</pre>';

        View::render('calculate.php', [
            'title' => 'Car Insurance Calculate form'
        ]);
    }
}