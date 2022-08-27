<?php

namespace App\Service\Calculator;

interface CalculatorInterface
{
    public function add(float $a, float $b): float;
    public function subtract(float $a, float $b): float;
    public function multiply(float $a, float $b): float;
    public function divide(float $a, float $b): float;
}