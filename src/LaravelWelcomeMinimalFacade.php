<?php

namespace Oxedition\LaravelWelcomeMinimal;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Oxedition\LaravelWelcomeMinimal\Skeleton\SkeletonClass
 */
class LaravelWelcomeMinimalFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel_welcome_minimal';
    }
}
