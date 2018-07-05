<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerFactionchangeAchievement
 * 
 * @property int $alliance_id
 * @property int $horde_id
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayerFactionchangeAchievement extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'player_factionchange_achievement';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'alliance_id' => 'int',
		'horde_id' => 'int'
	];
}
