<?php

namespace Penh\SimpleCurrency\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class SimpleCurrency extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Penh\SimpleCurrency\SimpleCurrency::class;
    }
}
