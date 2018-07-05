<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Playercreateinfo
 * 
 * @property int $race
 * @property int $class
 * @property int $map
 * @property int $zone
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property float $orientation
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Playercreateinfo extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'playercreateinfo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'race' => 'int',
		'class' => 'int',
		'map' => 'int',
		'zone' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'position_z' => 'float',
		'orientation' => 'float'
	];

	protected $fillable = [
		'map',
		'zone',
		'position_x',
		'position_y',
		'position_z',
		'orientation'
	];
}
