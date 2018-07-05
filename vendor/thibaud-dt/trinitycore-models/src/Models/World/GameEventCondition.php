<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventCondition
 * 
 * @property int $eventEntry
 * @property int $condition_id
 * @property float $req_num
 * @property int $max_world_state_field
 * @property int $done_world_state_field
 * @property string $description
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventCondition extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_condition';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'condition_id' => 'int',
		'req_num' => 'float',
		'max_world_state_field' => 'int',
		'done_world_state_field' => 'int'
	];

	protected $fillable = [
		'req_num',
		'max_world_state_field',
		'done_world_state_field',
		'description'
	];
}
