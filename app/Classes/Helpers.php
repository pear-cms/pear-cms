<?php

namespace App\Classes;
use Config;
use DB;
use Auth;
use SoapClient;
use SoapParam;

class Helpers {

  public static function getAllAccounts()
  {
    // returns all accounts.
    return DB::connection('auth')->table('account')->get();
  }

  public static function getAccountInformation($accid)
  {
    // returns account information.
    return DB::connection('auth')->table('account')->where('id', $accid)->first();
  }

  public static function lockAccount()
  {
    // returns if success or failed to lock account.
    if ( DB::connection('auth')->table('account')->where('id', Auth::user()->id)->update(['locked' => '1']) ) {
      return true;
    } else {
      return true;
    }
  }

  public static function addGoldCoins($accid, $count) {
    DB::connection('auth')->table('account')->where('id', $accid)->update([
      'goldcoins'   => DB::raw('goldcoins + ' . $count),
    ]);
  }

  public static function addSilverCoins($accid, $count) {
    DB::connection('auth')->table('account')->where('id', $accid)->update([
      'silvercoins'   => DB::raw('silvercoins + ' . $count),
    ]);
  }

  public static function checkIfAccountLocked()
  {
    if ( DB::connection('auth')->table('account')->where([
      ['id',     '=', Auth::user()->id],
      ['locked', '=', '1']
      ])->first() ) {
        return true;
      } else {
        return false;
      }
  }

  public static function getOnlinePlayers()
  {
    // returns the online players in numbers.
    return DB::connection('characters')->table('characters')->where('online', '=', '1')->count();
  }

  public static function getOnlineCharacters()
  {
    // returns all online characters.
    return DB::connection('characters')->table('characters')->where('online', '=', '1')->get();
  }

  public static function getOnlineCharactersByFaction($faction)
  {
    // returns all online characters by faction.
    $data = array();
    if ( $faction == 'horde') {
      $characters = DB::connection('characters')->table('characters')->where('online', '=', '1')->orderBy('level', 'desc')->get();
      $horde = array('2', '5', '6', '8', '9', '10');
      foreach ( $characters as $character)
      if ( in_array($character->race, $horde) ) {
        $data[] = $character;
      }
  } else {
    $characters = DB::connection('characters')->table('characters')->where('online', '=', '1')->orderBy('level', 'desc')->get();
    $horde = array('2', '5', '6', '8', '9', '10');
    foreach ( $characters as $character)
    if ( !in_array($character->race, $horde) ) {
      $data[] = $character;
    }
  }
  return $data;
  }

    public static function getOnlineCharactersCount() {
      return DB::connection('characters')->table('characters')->where('online', '=', '1')->count();
    }
    public static function getOnlineCharactersByFactionCount($faction)
    {
      // returns all online characters by faction.
      $data = array();
      if ( $faction == 'horde') {
        $characters = DB::connection('characters')->table('characters')->where('online', '=', '1')->get();
        $horde = array('2', '5', '6', '8', '9', '10');
        foreach ( $characters as $character)
        if ( in_array($character->race, $horde) ) {
          $data[] = $character;
        }
    } elseif( $faction == 'alliance') {
      $characters = DB::connection('characters')->table('characters')->where('online', '=', '1')->get();
      $horde = array('2', '5', '6', '8', '9', '10');
      foreach ( $characters as $character)
      if ( !in_array($character->race, $horde) ) {
        $data[] = $character;
      }
    }
    return count($data);
    }
  public static function checkIfGMByCharacterAccount($account)
  {
    if ( DB::connection('auth')->table('account_access')->where('id', $account)->first() ) {
    return true;
    } else {
    return false;
    }
  }

  public static function getAccountOnlineStatus($accid)
  {
    // returns online or offline for requested account.
    if ( DB::connection('auth')->table('account')->where([
      'id' => $accid,
      'online' => '1'
      ])->first() )
    {
      return 'Online';
    } else {
      return 'Offline';
    }
  }

  public static function getBanReason($accid) {
    if ( DB::connection('auth')->table('account_banned')->where([
      'id' => $accid,
      'active' => '1'
      ])->first() )
    {
      return DB::connection('auth')->table('account_banned')->where('id', $accid)->value('banreason');
    } else {
      return "Not Banned";
    }
  }

  public static function getAccountStatus($accid) {
    if ( DB::connection('auth')->table('account_banned')->where([
      'id' => $accid,
      'active' => '1'
      ])->first() )
    {
      return 2;
    }
    if ( DB::connection('auth')->table('account')->where([
      'id' => $accid,
      'locked' => '1'
      ])->first() )
    {
      return 1;
    }
    return 0;
  }

  public static function getCharacterStatus($status)
  {
    // returns online or offline for requested character.
    if ( $status )
    {
      return 'Online';
    } else {
      return 'Offline';
    }
  }

  public static function getTicketStatus($status)
  {
    // returns online or offline for requested account.
    if ( $status )
    {
      return 'Closed';
    } else {
      return 'Open';
    }
  }

  public static function getAccountCharacters()
  {
    // returns the charcaters of the account requesting it.
    return DB::connection('characters')->table('characters')->where('account', Auth::user()->id)->get();
  }

  public static function hashPassword($password)
  {
    // return in ACCOUNT:PASSWORD format as per TrinityCore requirements.
    return strtoupper(sha1(strtoupper(Auth::user()->username) . ':' . strtoupper($password)));
  }

  public static function sendSOAPCommand($command)
  {
    // Initialize a SOAP session.
    $client = new SoapClient(NULL, array(
    'location'    => "http://" . env('SOAP_HOST') .":" . env('SOAP_PORT') . "/",
    'uri'         => 'urn:TC',
    'style'       => SOAP_RPC,
    'login'       => env('SOAP_USERNAME'),
    'password'    => env('SOAP_PASSWORD'),
    ));
    // check for the sent SOAP command.
    if ( $result = $client->executeCommand(new SoapParam($command, 'command')) ) {
      // return true if it was successful.
      return true;
    } else {
      // return false if it was unsuccessful.
      return false;
    }
  }

  public static function getTotalAccountsInNumbers()
  {
    // returns the total amount of account created in amount.
    return DB::connection('auth')->table('account')->get()->count();
  }

  public static function getAccountCharactersNumbers()
  {
    // returns the characters in an int format:
    return DB::connection('characters')->table('characters')->where('account', Auth::user()->id)->count();
  }

  public static function getAccountCharactersNumbersById($accid)
  {
    // returns the characters in an int format:
    return DB::connection('characters')->table('characters')->where('account', $accid)->count();
  }

  public static function getFactionByRace($race)
  {
    $horde = array('2', '5', '6', '8', '9', '10');
    if ( in_array($race, $horde) ) {
      return 'horde';
    } else {
      return 'alliance';
    }
  }

  // Get realms and their status below.
  public static function getRealms()
  {
    // returns all realms.
    return DB::connection('auth')->table('realmlist')->get();
  }

  public static function getRealmStatus($port)
  {
    // attempts to  connect to the port for 5 seconds.
    if(@fsockopen(env('REALM_IP'), $port, $error, $errorString, 2)) {
      // return online if connected.
      return "Online";
    } else {
      // return offline if connection failed.
      return "Offline";
    }
  }

  public static function getRealmIcon($icon)
  {
    $icons = [
      '0'     => 'Normal',
      '1'     => 'PvP',
      '4'     => 'Normal',
      '6'     => 'RP',
      '8'     => 'RP PvP'
    ];

    return $icons[$icon];
  }

  // Check if account is Gamemaster or Administrator (GM level 3) below.
  public static function checkIfGM()
  {
    // checks if user is GM.
    if ( isset(Auth::user()->id) ) {
      if( DB::connection('auth')->table('account_access')->where('id', Auth::user()->id)->first() ) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public static function checkIfAdmin()
  {
    // checks if user is Admin.

      if ( isset(Auth::user()->id) ) {
        if( DB::connection('auth')->table('account_access')->where([
          ['id',      '=', Auth::user()->id],
          ['gmlevel', '=', '3']
          ])->first()) {
          return true;
        } else {
          return false;
        }
      } else {
        return false;
      }
  }

  // getCharacter<function> functions below.
  public static function getCharacterDataByName($name)
  {
    return DB::connection('characters')->table('characters')->where('name', $name)->first();
  }

  public static function getCharacterTickets($guid)
  {
    return DB::connection('characters')->table('gm_ticket')->where('playerGuid', $guid)->get();
  }

  public static function getTicketInformationFromGuid($guid, $id)
  {
    if($query = DB::connection('characters')->table('gm_ticket')->where(['playerGuid' => $guid, 'id' => $id])->first())
    {
      return $query;
    } else {
      return false;
    }
  }

  public static function getCharacterTicketsCount($guid)
  {
    return DB::connection('characters')->table('gm_ticket')->where('playerGuid', $guid)->count();
  }

  public static function CharacterBelongsToId($name, $id)
  {
    if (DB::connection('characters')->table('characters')->where(['name' => $name, 'account' => $id])->first())
    {
      return true;
    } else {
      return false;
    }
  }

  public static function getCharacterNameFromGuid($guid) {
    // returns 3 news articles
    return DB::connection('characters')->table('characters')->where('guid', $guid)->value('name');
  }

  // News articles system below.
  public static function getNewsArticles()
  {
    // returns 3 news articles
    return DB::connection('website')->table('news')->orderBy('timestamp', 'desc')->take(3)->get();
  }

  public static function getNewsArticleComments($id)
  {
      return DB::connection('website')->table('news_comments')->orderBy('timestamp', 'desc')->where('newsId', $id)->get();
  }

  public static function getAllNewsArticles()
  {
    // returns all news articles
    return DB::connection('website')->table('news')->orderBy('timestamp', 'desc')->get();
  }

  public static function getNewsArticle($id)
  {
    // returns specific news article
    return DB::connection('website')->table('news')->where('id', $id)->first();
  }

  // Set and get status of website/authentication system of website below.
  public static function getSiteMaintenanceStatus()
  {
    if ( DB::connection('website')->table('settings')->where('settings_name', 'site_maintenance')->value('settings_value') == '1' )
    {
      return true;
    } else {
      return false;
    }
  }

  public static function setSiteMaintenanceStatus()
  {
    if ( Helpers::getSiteMaintenanceStatus() )
    {
      DB::connection('website')->table('settings')->where('settings_name', 'site_maintenance')->update([
        'settings_value'   => '0',
      ]);
      return true;
    } else {
      DB::connection('website')->table('settings')->where('settings_name', 'site_maintenance')->update([
        'settings_value'   => '1',
      ]);
      return true;
    }
  }

  public static function getSiteAuthenticationStatus()
  {
    if ( DB::connection('website')->table('settings')->where('settings_name', 'site_authentication')->value('settings_value') == '1' )
    {
      return true;
    } else {
      return false;
    }
  }

  public static function setSiteAuthenticationStatus()
  {
    if ( Helpers::getSiteAuthenticationStatus() )
    {
      DB::connection('website')->table('settings')->where('settings_name', 'site_authentication')->update([
        'settings_value'   => '0',
      ]);
      return true;
    } else {
      DB::connection('website')->table('settings')->where('settings_name', 'site_authentication')->update([
        'settings_value'   => '1',
      ]);
      return true;
    }
  }


  // Misc functions below.
  public static function MapIdToZoneName($id)
  {
    $maps = [
      '0'   => 'Eastern Kingdoms',
      '1'   => 'Kalimdor',
      '30'  => 'Alterac Valley',
      '33'  => 'Shadowfang Keep',
      '34'  => 'Stormwind Stockades',
      '35'  => 'Stormwind Vault',
      '36'  => 'Deadmines',
      '43'  => 'Wailing Caverns',
      '47'  => 'Razorfen Kraul',
      '48'  => 'Blackfathom Deeps',
      '69'  => 'Emerald Dream',
      '70'  => 'Uldaman',
      '90'  => 'Gnomeregan',
      '109' => 'Sunken Temple',
      '129' => 'Razorfen Downs',
      '189' => 'Scarlet Monastery',
      '209' => 'Zul\'Farrak',
      '229' => 'Blackrock Spire',
      '230' => 'Blackrock Depths',
      '249' => 'Onyxia\'s Lair',
      '269' => 'The Black Morass',
      '289' => 'Scholomance',
      '309' => 'Zul\'Gurub',
      '329' => 'Stratholme',
      '349' => 'Maraudon',
      '369' => 'Deeprun Tram',
      '389' => 'Ragefire Chasm',
      '409' => 'Molten Core',
      '429' => 'Dire Maul',
      '449' => 'Alliance Military Barracks',
      '450' => 'Horde Military Barracks',
      '469' => 'Blackwing Lair',
      '509' => 'Ahn\'Qiraj Ruins',
      '530' => 'Outlands',
      '531' => 'Ahn\'Qiraj Temple',
      '532' => 'Karazhan',
      '533' => 'Naxxramas',
      '534' => 'Hyjal Summit',
      '560' => 'Old Hillsbrad Foothills',
      '553' => 'The Botanica',
      '545' => 'Steamvault',
      '554' => 'The Mechanar',
      '564' => 'Black Temple',
      '565' => 'Gruul\'s Lair',
      '552' => 'The Arcatraz',
      '550' => 'Tempest Keep',
      '540' => 'Shattered Halls',
      '544' => 'Magtheridon\'s Lair',
      '543' => 'Hellfire Ramparts',
      '542' => 'The Blood Furnace',
      '557' => 'Mana Tombs',
      '555' => 'Shadow Labyrinth',
      '556' => 'Sethekk Halls',
      '558' => 'Auchenai Crypts',
      '547' => 'The Slave Pens',
      '548' => 'Serpentshrine Cavern',
      '546' => 'The Underbog',
      '568' => 'Zul\'Aman',
      '571' => 'Northrend'
    ];

    return $maps[$id];
  }

  public static function UnixToTime($time) {
    $min = intval(($time / 60) % 60);
    $minSec = $min.'m ';

    $sec = intval($time % 60);
    $sec = str_pad($sec, 2, "0", STR_PAD_LEFT);
    $minSec .= $sec.'s';

    return $minSec;
}

public static function secondsToTime($seconds) {
  $dtF = new \DateTime('@0');
  $dtT = new \DateTime("@$seconds");
  return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
}

public static function limitTicketLength($string)
{
  if (strlen($string) > 15) {
    $str = substr($string, 0, 12) . "...";
  } else {
    $str = $string;
  }
  return $str;
}

public static function ticketStatus($status)
{
  $types = [
    '-1'     => 'Closed',
    '0'      => 'Open',
  ];
  // If a ticket is closed by a GM, the integer will be greater than 0 which is why we need this.
  if ( $status > 0) {
    return 'Closed';
  } else {
    return $types[$status];
  }
}

}
