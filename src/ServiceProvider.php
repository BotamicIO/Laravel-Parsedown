<?php

/*
 * This file is part of Laravel Parsedown.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Parsedown;

use Parsedown;
use Illuminate\Support\ServiceProvider as IlluminateProvider;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends IlluminateProvider
{
    /**
     *
     */
    public function register()
    {
        $this->app->singleton('parsedown', function ($app) {
            return new Parsedown();
        });
    }
}
