<?php namespace Edutalk\Base\Hook\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Edutalk\Base\Hook\Support\Actions;

class ActionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Actions::class;
    }
}
