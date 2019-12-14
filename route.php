<?php

use InsuranceCalculator\App\Core\Route;

$route = new Route();

$route->register('/', 'HomePage@index');
$route->register('/car', 'Car@index');
$route->register('/car/calculate', 'Car@calculate');

$route->handle();
