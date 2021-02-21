<?php

namespace BaoConcise\LaravelPackageSkeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BaoConcise\LaravelPackageSkeleton\Skeleton\SkeletonClass
 */
class LaravelPackageSkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-package-skeleton';
    }
}
