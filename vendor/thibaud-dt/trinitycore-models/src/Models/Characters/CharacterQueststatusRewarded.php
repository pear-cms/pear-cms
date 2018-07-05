<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterQueststatusRewarded
 * 
 * @property int $guid
 * @property int $quest
 * @property int $active
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterQueststatusRewarded extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_queststatus_rewarded';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'quest' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'active'
	];
}
