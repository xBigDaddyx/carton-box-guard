<?php

namespace Teresa\CartonBoxGuard\Facades;

use Illuminate\Support\Facades\Facade;
use Teresa\CartonBoxGuard\Repositories\CartonBoxRepository;

/**
 * @see \Teresa\CartonBoxGuard\CartonBoxGuard
 */
class CartonBoxFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        //return \Teresa\CartonBoxGuard\CartonBoxGuard::class;
        return 'CartonBoxRepository';
    }
}
