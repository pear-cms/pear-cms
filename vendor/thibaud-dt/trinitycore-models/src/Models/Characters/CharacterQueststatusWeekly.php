<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterQueststatusWeekly
 * 
 * @property int $guid
 * @property int $quest
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterQueststatusWeekly extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_queststatus_weekly';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'quest' => 'int'
	];
}
