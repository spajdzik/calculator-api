<?php

namespace App\Tests\Service\Calculator;

class CalculatorDivideTest extends AbstractCalculatorTest
{
    public function test_divide_int_success()
    {
        //Given

        //When

        //Then
        $this->assertSame(8.4032258, $this->calculatorService->divide(521, 62));
        $this->assertSame(0.78374233, $this->calculatorService->divide(511, 652));
    }

    public function test_divide_float_success()
    {
        //Given

        //When

        //Then
        $this->assertSame(2.40858505, $this->calculatorService->divide(151.5, 62.9));
        $this->assertSame(0.78365532, $this->calculatorService->divide(511.1, 652.2));
    }

    public function test_divide_int_error()
    {
        //Given

        //When

        //Then
        $this->assertNotSame(113.0, $this->calculatorService->divide(52, 64));
        $this->assertNotSame(1163.0, $this->calculatorService->divide(411, 652));
    }

    public function test_divide_float_error()
    {
        //Given

        //When

        //Then
        $this->assertNotSame(114.4, $this->calculatorService->divide(51.5, 61.9));
        $this->assertNotSame(153.3, $this->calculatorService->divide(511.1, 652.2));
    }
}