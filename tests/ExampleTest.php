<?php

namespace BaoConcise\LaravelPackageSkeleton\Tests;

use Orchestra\Testbench\TestCase;
use BaoConcise\LaravelPackageSkeleton\LaravelPackageSkeletonServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPackageSkeletonServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
