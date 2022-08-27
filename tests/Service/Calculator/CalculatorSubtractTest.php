<?php

namespace App\Tests\Service\Calculator;

class CalculatorSubtractTest extends AbstractCalculatorTest
{
    public function test_subtract_int_success()
    {
        //Given

        //When

        //Then
        $this->assertSame(-11.0, $this->calculatorService->subtract(51, 62));
        $this->assertSame(80459913.0, $this->calculatorService->subtract(81111155, 651242));
    }

    public function test_subtract_float_success()
    {
        //Given

        //When

        //Then
        $this->assertSame(-11.4, $this->calculatorService->subtract(51.5, 62.9));
        $this->assertSame(3859868.9, $this->calculatorService->subtract(4511111.1, 651242.2));
    }

    public function test_subtract_int_error()
    {
        //Given

        //When

        //Then
        $this->assertNotSame(13.0, $this->calculatorService->subtract(52, 64));
        $this->assertNotSame(1162353.0, $this->calculatorService->subtract(511411, 651242));
    }

    public function test_subtract_float_error()
    {
        //Given

        //When

        //Then
        $this->assertNotSame(114.4, $this->calculatorService->subtract(51.5, 61.9));
        $this->assertNotSame(1162353.3, $this->calculatorService->subtract(511311.1, 651242.2));
    }
}