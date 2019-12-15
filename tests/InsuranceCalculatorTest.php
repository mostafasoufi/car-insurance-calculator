<?php

namespace InsuranceCalculator\Test;

use InsuranceCalculator\App\Core\Insurance\Car;
use PHPUnit\Framework\TestCase;

class InsuranceCalculator extends TestCase
{
    /**
     * Instance car class test.
     */
    public function testInstanceCarClass()
    {
        $instance = new Car(1000, 10, 2);
        $this->assertInstanceOf(Car::class, $instance);
    }
}