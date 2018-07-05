<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureSummonGroup
 * 
 * @property int $summonerId
 * @property int $summonerType
 * @property int $groupId
 * @property int $entry
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property float $orientation
 * @property int $summonType
 * @property int $summonTime
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureSummonGroup extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'summonerId' => 'int',
		'summonerType' => 'int',
		'groupId' => 'int',
		'entry' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'position_z' => 'float',
		'orientation' => 'float',
		'summonType' => 'int',
		'summonTime' => 'int'
	];

	protected $fillable = [
		'summonerId',
		'summonerType',
		'groupId',
		'entry',
		'position_x',
		'position_y',
		'position_z',
		'orientation',
		'summonType',
		'summonTime'
	];
}
