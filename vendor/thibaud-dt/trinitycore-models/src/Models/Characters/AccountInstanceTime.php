<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountInstanceTime
 * 
 * @property int $accountId
 * @property int $instanceId
 * @property int $releaseTime
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class AccountInstanceTime extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'accountId' => 'int',
		'instanceId' => 'int',
		'releaseTime' => 'int'
	];

	protected $fillable = [
		'releaseTime'
	];
}
