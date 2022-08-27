<?php

namespace App\Tests\Service\Calculator;

class CalculatorMultiplyTest extends AbstractCalculatorTest
{
    public function test_multiply_int_success()
    {
        //Given

        //When

        //Then
        $this->assertSame(3162.0, $this->calculatorService->multiply(51, 62));
        $this->assertSame(333172.0, $this->calculatorService->multiply(511, 652));
    }

    public function test_multiply_float_success()
    {
        //Given

        //When

        //Then
        $this->assertSame(3239.35, $this->calculatorService->multiply(51.5, 62.9));
        $this->assertSame(333339.42, $this->calculatorService->multiply(511.1, 652.2));
    }

    public function test_multiply_int_error()
    {
        //Given

        //When

        //Then
        $this->assertNotSame(113.0, $this->calculatorService->multiply(52, 64));
        $this->assertNotSame(1163.0, $this->calculatorService->multiply(411, 652));
    }

    public function test_multiply_float_error()
    {
        //Given

        //When

        //Then
        $this->assertNotSame(114.4, $this->calculatorService->multiply(51.5, 61.9));
        $this->assertNotSame(153.3, $this->calculatorService->multiply(511.1, 652.2));
    }
}