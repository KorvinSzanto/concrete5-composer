<?php

namespace ConcreteComposer;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{

    // Integrate Mockery bindings so that we can use mockery
    use MockeryPHPUnitIntegration;
}
