<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesAchievementReward
 * 
 * @property int $entry
 * @property string $subject_loc1
 * @property string $subject_loc2
 * @property string $subject_loc3
 * @property string $subject_loc4
 * @property string $subject_loc5
 * @property string $subject_loc6
 * @property string $subject_loc7
 * @property string $subject_loc8
 * @property string $text_loc1
 * @property string $text_loc2
 * @property string $text_loc3
 * @property string $text_loc4
 * @property string $text_loc5
 * @property string $text_loc6
 * @property string $text_loc7
 * @property string $text_loc8
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesAchievementReward extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_achievement_reward';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int'
	];

	protected $fillable = [
		'subject_loc1',
		'subject_loc2',
		'subject_loc3',
		'subject_loc4',
		'subject_loc5',
		'subject_loc6',
		'subject_loc7',
		'subject_loc8',
		'text_loc1',
		'text_loc2',
		'text_loc3',
		'text_loc4',
		'text_loc5',
		'text_loc6',
		'text_loc7',
		'text_loc8'
	];
}
