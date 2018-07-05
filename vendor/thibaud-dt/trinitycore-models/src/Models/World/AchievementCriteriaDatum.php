<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AchievementCriteriaDatum
 * 
 * @property int $criteria_id
 * @property int $type
 * @property int $value1
 * @property int $value2
 * @property string $ScriptName
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class AchievementCriteriaDatum extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'criteria_id' => 'int',
		'type' => 'int',
		'value1' => 'int',
		'value2' => 'int'
	];

	protected $fillable = [
		'value1',
		'value2',
		'ScriptName'
	];
}
