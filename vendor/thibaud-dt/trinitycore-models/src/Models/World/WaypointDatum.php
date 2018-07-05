<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class WaypointDatum
 * 
 * @property int $id
 * @property int $point
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property float $orientation
 * @property int $delay
 * @property int $move_type
 * @property int $action
 * @property int $action_chance
 * @property int $wpguid
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class WaypointDatum extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'point' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'position_z' => 'float',
		'orientation' => 'float',
		'delay' => 'int',
		'move_type' => 'int',
		'action' => 'int',
		'action_chance' => 'int',
		'wpguid' => 'int'
	];

	protected $fillable = [
		'position_x',
		'position_y',
		'position_z',
		'orientation',
		'delay',
		'move_type',
		'action',
		'action_chance',
		'wpguid'
	];
}
