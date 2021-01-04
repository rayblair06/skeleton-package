<?php

namespace Rayblair\SkeletonPackage\Tests;

use Orchestra\Testbench\TestCase;
use Rayblair\SkeletonPackage\SkeletonPackageServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SkeletonPackageServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
