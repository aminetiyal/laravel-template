<?php

namespace Aminetiyal\LaravelTemplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aminetiyal\LaravelTemplate\Skeleton\SkeletonClass
 */
class LaravelTemplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'template';
    }
}
