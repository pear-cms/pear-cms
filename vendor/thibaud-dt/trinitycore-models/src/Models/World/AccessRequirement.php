<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AccessRequirement
 * 
 * @property int $mapId
 * @property int $difficulty
 * @property int $level_min
 * @property int $level_max
 * @property int $item_level
 * @property int $item
 * @property int $item2
 * @property int $quest_done_A
 * @property int $quest_done_H
 * @property int $completed_achievement
 * @property string $quest_failed_text
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class AccessRequirement extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'access_requirement';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'mapId' => 'int',
		'difficulty' => 'int',
		'level_min' => 'int',
		'level_max' => 'int',
		'item_level' => 'int',
		'item' => 'int',
		'item2' => 'int',
		'quest_done_A' => 'int',
		'quest_done_H' => 'int',
		'completed_achievement' => 'int'
	];

	protected $fillable = [
		'level_min',
		'level_max',
		'item_level',
		'item',
		'item2',
		'quest_done_A',
		'quest_done_H',
		'completed_achievement',
		'quest_failed_text',
		'comment'
	];
}
