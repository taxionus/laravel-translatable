<?php

namespace Taxionus\Translatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Taxionus\Translatable\Translatable
 */
class Translatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translatable';
    }
}
