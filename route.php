<?php

use CarInsuranceCalculator\Core\Route;

$route = new Route();

$route->register('/', 'HomePage@index');
$route->register('/form', 'Form@index');
$route->register('/calculate', 'Calculate@index');

$route->handle();
