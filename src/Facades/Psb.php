<?php namespace Bantenprov\Psb\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Psb facade.
 *
 * @package Bantenprov\Psb
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Psb extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dashboard-tanara-statistic';
    }
}
