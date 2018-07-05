<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterQueststatusDaily
 * 
 * @property int $guid
 * @property int $quest
 * @property int $time
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterQueststatusDaily extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_queststatus_daily';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'quest' => 'int',
		'time' => 'int'
	];

	protected $fillable = [
		'time'
	];
}
