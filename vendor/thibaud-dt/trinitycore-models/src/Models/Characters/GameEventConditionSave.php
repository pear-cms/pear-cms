<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventConditionSave
 * 
 * @property int $eventEntry
 * @property int $condition_id
 * @property float $done
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventConditionSave extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'game_event_condition_save';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'condition_id' => 'int',
		'done' => 'float'
	];

	protected $fillable = [
		'done'
	];
}
