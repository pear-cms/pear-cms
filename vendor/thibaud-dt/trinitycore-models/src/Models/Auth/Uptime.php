<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Uptime
 * 
 * @property int $realmid
 * @property int $starttime
 * @property int $uptime
 * @property int $maxplayers
 * @property string $revision
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class Uptime extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'uptime';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'realmid' => 'int',
		'starttime' => 'int',
		'uptime' => 'int',
		'maxplayers' => 'int'
	];

	protected $fillable = [
		'uptime',
		'maxplayers',
		'revision'
	];
}
