<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Group
 * 
 * @property int $guid
 * @property int $leaderGuid
 * @property int $lootMethod
 * @property int $looterGuid
 * @property int $lootThreshold
 * @property int $icon1
 * @property int $icon2
 * @property int $icon3
 * @property int $icon4
 * @property int $icon5
 * @property int $icon6
 * @property int $icon7
 * @property int $icon8
 * @property int $groupType
 * @property int $difficulty
 * @property int $raidDifficulty
 * @property int $masterLooterGuid
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Group extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'leaderGuid' => 'int',
		'lootMethod' => 'int',
		'looterGuid' => 'int',
		'lootThreshold' => 'int',
		'icon1' => 'int',
		'icon2' => 'int',
		'icon3' => 'int',
		'icon4' => 'int',
		'icon5' => 'int',
		'icon6' => 'int',
		'icon7' => 'int',
		'icon8' => 'int',
		'groupType' => 'int',
		'difficulty' => 'int',
		'raidDifficulty' => 'int',
		'masterLooterGuid' => 'int'
	];

	protected $fillable = [
		'leaderGuid',
		'lootMethod',
		'looterGuid',
		'lootThreshold',
		'icon1',
		'icon2',
		'icon3',
		'icon4',
		'icon5',
		'icon6',
		'icon7',
		'icon8',
		'groupType',
		'difficulty',
		'raidDifficulty',
		'masterLooterGuid'
	];
}
