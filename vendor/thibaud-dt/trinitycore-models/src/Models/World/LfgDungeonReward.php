<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LfgDungeonReward
 * 
 * @property int $dungeonId
 * @property int $maxLevel
 * @property int $firstQuestId
 * @property int $otherQuestId
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LfgDungeonReward extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dungeonId' => 'int',
		'maxLevel' => 'int',
		'firstQuestId' => 'int',
		'otherQuestId' => 'int'
	];

	protected $fillable = [
		'firstQuestId',
		'otherQuestId'
	];
}
