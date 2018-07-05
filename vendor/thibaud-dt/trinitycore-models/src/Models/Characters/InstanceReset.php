<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstanceReset
 * 
 * @property int $mapid
 * @property int $difficulty
 * @property int $resettime
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class InstanceReset extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'instance_reset';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'mapid' => 'int',
		'difficulty' => 'int',
		'resettime' => 'int'
	];

	protected $fillable = [
		'resettime'
	];
}
