<?php

namespace App\Service\Calculator;

/**
 * There is problem with precision while doing math with floats I recommend to use bcmath to do the equations
 */
class Calculator implements CalculatorInterface
{
    private const PRECISION = 8;

    public function add(float $a, float $b): float
    {
        return (float) bcadd($a, $b, self::PRECISION);
    }

    public function subtract(float $a, float $b): float
    {
        return (float) bcsub($a, $b, self::PRECISION);
    }

    public function multiply(float $a, float $b): float
    {
        return (float) bcmul($a, $b, self::PRECISION);
    }

    public function divide(float $a, float $b): float
    {
        return (float) bcdiv($a, $b, self::PRECISION);
    }
}