<?php 

namespace Versatile\Html\Bootstrap\Facades;

use Illuminate\Support\Facades\Facade;

class Bootstrap extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bootstrap';
    }
}
