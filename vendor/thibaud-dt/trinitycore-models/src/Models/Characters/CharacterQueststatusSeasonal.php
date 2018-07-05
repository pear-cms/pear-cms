<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterQueststatusSeasonal
 * 
 * @property int $guid
 * @property int $quest
 * @property int $event
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterQueststatusSeasonal extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_queststatus_seasonal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'quest' => 'int',
		'event' => 'int'
	];

	protected $fillable = [
		'event'
	];
}
