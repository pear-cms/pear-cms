<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    public $timestamps     = false;
    protected $connection  = 'characters';
    protected $table       = 'gm_ticket';
}
