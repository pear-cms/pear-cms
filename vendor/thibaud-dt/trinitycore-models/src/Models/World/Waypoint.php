<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Waypoint
 * 
 * @property int $entry
 * @property int $pointid
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property string $point_comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Waypoint extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'pointid' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'position_z' => 'float'
	];

	protected $fillable = [
		'position_x',
		'position_y',
		'position_z',
		'point_comment'
	];
}
