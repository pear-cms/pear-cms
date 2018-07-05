<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AchievementDbc
 * 
 * @property int $ID
 * @property int $requiredFaction
 * @property int $mapID
 * @property int $points
 * @property int $flags
 * @property int $count
 * @property int $refAchievement
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class AchievementDbc extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'achievement_dbc';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'requiredFaction' => 'int',
		'mapID' => 'int',
		'points' => 'int',
		'flags' => 'int',
		'count' => 'int',
		'refAchievement' => 'int'
	];

	protected $fillable = [
		'requiredFaction',
		'mapID',
		'points',
		'flags',
		'count',
		'refAchievement'
	];
}
