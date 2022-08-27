<?php

namespace App\Tests\Service\Calculator;

use App\Service\Calculator\Calculator;
use App\Tests\ServiceTestCase;

abstract class AbstractCalculatorTest extends ServiceTestCase
{
    protected Calculator $calculatorService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->calculatorService = $this->container->get(Calculator::class);
    }
}