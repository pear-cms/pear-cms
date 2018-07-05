<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ReputationRewardRate
 * 
 * @property int $faction
 * @property float $quest_rate
 * @property float $quest_daily_rate
 * @property float $quest_weekly_rate
 * @property float $quest_monthly_rate
 * @property float $quest_repeatable_rate
 * @property float $creature_rate
 * @property float $spell_rate
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ReputationRewardRate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'reputation_reward_rate';
	protected $primaryKey = 'faction';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'faction' => 'int',
		'quest_rate' => 'float',
		'quest_daily_rate' => 'float',
		'quest_weekly_rate' => 'float',
		'quest_monthly_rate' => 'float',
		'quest_repeatable_rate' => 'float',
		'creature_rate' => 'float',
		'spell_rate' => 'float'
	];

	protected $fillable = [
		'quest_rate',
		'quest_daily_rate',
		'quest_weekly_rate',
		'quest_monthly_rate',
		'quest_repeatable_rate',
		'creature_rate',
		'spell_rate'
	];
}
