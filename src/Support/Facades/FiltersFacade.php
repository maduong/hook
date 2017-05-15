<?php namespace Edutalk\Base\Hook\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Edutalk\Base\Hook\Support\Filters;

class FiltersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Filters::class;
    }
}
