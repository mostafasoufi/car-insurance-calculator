<?php

use CarInsuranceCalculator\Core\Route;

$route = new Route();

$route->register('/', 'HomePage@index');
$route->register('/calculator', 'Calculator@index');

$route->handle();
