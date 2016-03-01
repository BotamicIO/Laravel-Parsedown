<?php

/*
 * This file is part of Laravel Parsedown.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Parsedown\Test;

class ParserTest extends \Orchestra\Testbench\TestCase
{
    public function testOutputIsValidHtml()
    {
        $this->assertEquals(
            \Markdown::text('Hello _Parsedown_!'),
            '<p>Hello <em>Parsedown</em>!</p>'
        );
    }

    protected function getPackageProviders($app)
    {
        return ['DraperStudio\Parsedown\ServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return ['Markdown' => 'DraperStudio\Parsedown\Facades\Parsedown'];
    }
}
