<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
  public $timestamps     = false;
  protected $connection  = 'website';
  protected $table       = 'error_logs';
}
