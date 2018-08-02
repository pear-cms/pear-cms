<?php

namespace App\Classes;

use Illuminate\Database\Eloquent\Model;
use DB;

class Account extends Model
{
  public $timestamps     = false;
  protected $connection  = 'auth';
  protected $table       = 'account';

  public static function statusToText($locked)
  {
      $status = [
        '0'     => 'unlocked',
        '1'     => 'locked',
      ];
      return $status[$locked];
  }

  public static function getIPInfo($ip)
  {
    $data = json_decode(file_get_contents("http://ip-api.com/json/" . $ip));
   if ( $data->status == 'success' )
     {
       return $data->city . ', ' . $data->country;
     } else {
       return 'Unkown';
     }
  }

  public static function checkIfAdmin($id)
  {
    if ( isset($id) ) {
      if( DB::connection('auth')->table('account_access')->where([
        ['id',      '=', $id],
        ['gmlevel', '>=', '3']
        ])->first()) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
