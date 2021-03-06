<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Parsedown.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Parsedown;

use Illuminate\Support\ServiceProvider;

/**
 * Class ServiceProvider.
 */
class ParsedownServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('parsedown', function ($app) {
            return new \Parsedown();
        });
    }
}
