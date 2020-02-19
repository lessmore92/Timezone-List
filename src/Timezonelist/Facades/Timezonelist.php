<?php namespace Lessmore92\Timezonelist\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Timezonelist facade.
 *
 * @package Lessmore92\Timezonelist\Facades
 * @author Jackie Do <anhvudo@gmail.com>
 */
class Timezonelist extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezonelist';
    }
}
