<?php

namespace App\Classes;

use Illuminate\Database\Eloquent\Model;

class Realms extends Model
{
    public $timestamps     = false;
    protected $connection  = 'auth';
    protected $table       = 'realmlist';

    public static function getRealmStatus($port)
    {
      // attempts to  connect to the port for 5 seconds.
      if(@fsockopen(env('REALMLIST'), $port, $error, $errorString, 5)) {
        // return online if connected.
        return "Online";
      } else {
        // return offline if connection failed.
        return "Offline";
      }
    }

    public static function getRealmIcon($icon)
    {
      // returns realm icon
      static $icons = [
        '0'     => 'Normal',
        '1'     => 'PvP',
        '4'     => 'Normal',
        '6'     => 'RP',
        '8'     => 'RP PvP'
      ];

      return $icons[$icon];
    }

    public static function getGameBuild($gamebuild)
    {
      // returns realm icon
      static $gamebuilds = [
        '5875'     => '1.12.1',
        '6005'     => '1.12.2',
        '8606'     => '2.4.3',
        '9947'     => '3.1.3',
        '10146'    => '3.2.0',
        '10505'    => '3.2.2a',
        '10571'    => '3.3.0',
        '11159'    => '3.3.0a',
        '11403'    => '3.3.2',
        '11623'    => '3.3.3',
        '11723'    => '3.3.3a',
        '12340'    => '3.3.5a',
      ];

      return $gamebuilds[$gamebuild];
    }
}
