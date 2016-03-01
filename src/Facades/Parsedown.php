<?php

/*
 * This file is part of Laravel Parsedown.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Parsedown\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Parsedown.
 */
class Parsedown extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'parsedown';
    }
}
