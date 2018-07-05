<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureFormation
 * 
 * @property int $leaderGUID
 * @property int $memberGUID
 * @property float $dist
 * @property float $angle
 * @property int $groupAI
 * @property int $point_1
 * @property int $point_2
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureFormation extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'memberGUID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'leaderGUID' => 'int',
		'memberGUID' => 'int',
		'dist' => 'float',
		'angle' => 'float',
		'groupAI' => 'int',
		'point_1' => 'int',
		'point_2' => 'int'
	];

	protected $fillable = [
		'leaderGUID',
		'dist',
		'angle',
		'groupAI',
		'point_1',
		'point_2'
	];
}
