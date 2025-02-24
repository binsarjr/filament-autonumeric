<?php

namespace Binsarjr\FilamentAutonumeric\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Binsarjr\FilamentAutonumeric\FilamentAutonumeric
 */
class FilamentAutonumeric extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Binsarjr\FilamentAutonumeric\FilamentAutonumeric::class;
    }
}
