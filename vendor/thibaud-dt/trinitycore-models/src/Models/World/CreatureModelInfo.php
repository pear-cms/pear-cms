<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureModelInfo
 * 
 * @property int $DisplayID
 * @property float $BoundingRadius
 * @property float $CombatReach
 * @property int $Gender
 * @property int $DisplayID_Other_Gender
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureModelInfo extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_model_info';
	protected $primaryKey = 'DisplayID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DisplayID' => 'int',
		'BoundingRadius' => 'float',
		'CombatReach' => 'float',
		'Gender' => 'int',
		'DisplayID_Other_Gender' => 'int'
	];

	protected $fillable = [
		'BoundingRadius',
		'CombatReach',
		'Gender',
		'DisplayID_Other_Gender'
	];
}
