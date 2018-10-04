<?php

namespace App\Classes;

use Illuminate\Database\Eloquent\Model;

class Changelog extends Model
{
  public $timestamps     = false;
  protected $connection  = 'website';
  protected $table       = 'changelogs';
}
