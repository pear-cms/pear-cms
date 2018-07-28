<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realms extends Model
{
    public $timestamps     = false;
    protected $connection  = 'auth';
    protected $table       = 'realmlist';
}
