<?php

namespace Teresa\CartonBoxGuard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Teresa\CartonBoxGuard\CartonBoxGuard
 */
class CartonBoxGuard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Teresa\CartonBoxGuard\CartonBoxGuard::class;
    }
}
