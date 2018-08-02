<?php

namespace App\Classes;

use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
  public $timestamps     = false;
  protected $connection  = 'characters';
  protected $table       = 'characters';

  public function user()
  {
    return $this->belongsTo('App\User->id()', 'name', 'account');
  }

}
