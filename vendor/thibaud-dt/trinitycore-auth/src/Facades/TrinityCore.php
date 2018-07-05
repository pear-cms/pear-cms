<?php

namespace ThibaudDT\TrinityCoreAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class TrinityCore
 *
 * @category Facade
 * @package  ThibaudDT\TrinityCoreAuth\Facades
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/trinitycore-auth
 */
class TrinityCore extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'trinitycore'; }


}