<?php

namespace InsuranceCalculator\Test;

use InsuranceCalculator\App\Core\Insurance\Car;
use PHPUnit\Framework\TestCase;

class CarInsuranceTest extends TestCase
{
    /**
     * Test car class.
     * @throws \Exception
     */
    public function testInstanceCarClass()
    {
        $car = new Car(10000, 10, 2);

        $this->assertEquals($car->getBasePrice(), 1100);
        $this->assertEquals($car->getCommissionPrice(), 187);
        $this->assertEquals($car->getTaxPrice(), 110);
    }
}