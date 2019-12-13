<?php

namespace CarInsuranceCalculator\Core;

/**
 * Class Route
 * @package CarInsuranceCalculator\Core
 */
class Route
{
    private $routes;

    /**
     * @param $path
     * @param $method
     */
    public function register($path, $method)
    {

        $actions = explode('@', $method);
        $class = '\\CarInsuranceCalculator\\Controller\\' . $actions[0];

        $this->routes[ltrim($path, '/')] = [
            'class' => new $class(),
            'method' => $actions[1],
        ];
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        if (isset($this->routes[$_GET['parameter']])) {
            $route = $this->routes[$_GET['parameter']];

            return call_user_func(array($route['class'], $route['method']));
        }
    }
}