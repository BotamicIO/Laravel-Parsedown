<?php

namespace DraperStudio\Parsedown\Facades;

use Illuminate\Support\Facades\Facade;

class Parsedown extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'parsedown';
    }
}
