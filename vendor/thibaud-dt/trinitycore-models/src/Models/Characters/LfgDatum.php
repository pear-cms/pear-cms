<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LfgDatum
 * 
 * @property int $guid
 * @property int $dungeon
 * @property int $state
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LfgDatum extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'dungeon' => 'int',
		'state' => 'int'
	];

	protected $fillable = [
		'dungeon',
		'state'
	];
}
