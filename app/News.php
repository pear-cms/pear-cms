<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  public $timestamps     = false;
  protected $connection  = 'website';
  protected $table       = 'news';

  public function comments()
  {
        return $this->hasMany(NewsComments::class, 'newsId');
  }

}
