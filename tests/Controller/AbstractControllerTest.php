<?php

namespace App\Tests\Controller;

use App\Tests\ServiceTestCase;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;

abstract class AbstractControllerTest extends ServiceTestCase
{
    protected KernelBrowser $client;

    protected function setUp(): void
    {
        parent::setUp();

        self::ensureKernelShutdown();
        $this->client = static::createClient();
    }
}