<?php

namespace App\Tests\Service\Calculator;

class CalculatorAddTest extends AbstractCalculatorTest
{
    public function test_add_int_success()
    {
        //Given

        //When

        //Then
        $this->assertSame(113.0, $this->calculatorService->add(51, 62));
        $this->assertSame(1162353.0, $this->calculatorService->add(511111, 651242));
    }

    public function test_add_float_success()
    {
        //Given

        //When

        //Then
        $this->assertSame(114.4, $this->calculatorService->add(51.5, 62.9));
        $this->assertSame(1162353.3, $this->calculatorService->add(511111.1, 651242.2));
    }

    public function test_add_int_error()
    {
        //Given

        //When

        //Then
        $this->assertNotSame(113.0, $this->calculatorService->add(52, 64));
        $this->assertNotSame(1162353.0, $this->calculatorService->add(511411, 651242));
    }

    public function test_add_float_error()
    {
        //Given

        //When

        //Then
        $this->assertNotSame(114.4, $this->calculatorService->add(51.5, 61.9));
        $this->assertNotSame(1162353.3, $this->calculatorService->add(511311.1, 651242.2));
    }
}