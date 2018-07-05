<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ScriptWaypoint
 * 
 * @property int $entry
 * @property int $pointid
 * @property float $location_x
 * @property float $location_y
 * @property float $location_z
 * @property int $waittime
 * @property string $point_comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ScriptWaypoint extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'script_waypoint';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'pointid' => 'int',
		'location_x' => 'float',
		'location_y' => 'float',
		'location_z' => 'float',
		'waittime' => 'int'
	];

	protected $fillable = [
		'location_x',
		'location_y',
		'location_z',
		'waittime',
		'point_comment'
	];
}
