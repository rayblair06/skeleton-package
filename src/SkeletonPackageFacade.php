<?php

namespace Rayblair\SkeletonPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rayblair\SkeletonPackage\Skeleton\SkeletonClass
 */
class SkeletonPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton-package';
    }
}
