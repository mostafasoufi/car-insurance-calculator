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
        $class = '\\CarInsuranceCalculator\\controller\\' . $actions[0];

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
        if (empty($this->routes[$this->getParameter()])) {
            http_response_code(404);
            echo '<h1>404 - Not Found</h1>';
            die();
        }

        $route = $this->routes[$this->getParameter()];

        return call_user_func(array($route['class'], $route['method']));
    }

    /**
     * Get parameter.
     * @return mixed
     */
    private function getParameter()
    {
        return $_GET['parameter'];
    }
}