<?php

namespace Heritage\Notifications\Tests\Feature;

use Heritage\Notifications\VonageChannelServiceProvider;
use Orchestra\Testbench\TestCase;

abstract class FeatureTestCase extends TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Heritage\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [VonageChannelServiceProvider::class];
    }
}
