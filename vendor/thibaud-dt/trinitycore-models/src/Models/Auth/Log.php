<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Log
 * 
 * @property int $time
 * @property int $realm
 * @property string $type
 * @property int $level
 * @property string $string
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class Log extends Eloquent
{
	protected $connection = 'auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'time' => 'int',
		'realm' => 'int',
		'level' => 'int'
	];

	protected $fillable = [
		'time',
		'realm',
		'type',
		'level',
		'string'
	];
}
