<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SmartScript
 * 
 * @property int $entryorguid
 * @property int $source_type
 * @property int $id
 * @property int $link
 * @property int $event_type
 * @property int $event_phase_mask
 * @property int $event_chance
 * @property int $event_flags
 * @property int $event_param1
 * @property int $event_param2
 * @property int $event_param3
 * @property int $event_param4
 * @property int $action_type
 * @property int $action_param1
 * @property int $action_param2
 * @property int $action_param3
 * @property int $action_param4
 * @property int $action_param5
 * @property int $action_param6
 * @property int $target_type
 * @property int $target_param1
 * @property int $target_param2
 * @property int $target_param3
 * @property float $target_x
 * @property float $target_y
 * @property float $target_z
 * @property float $target_o
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SmartScript extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entryorguid' => 'int',
		'source_type' => 'int',
		'id' => 'int',
		'link' => 'int',
		'event_type' => 'int',
		'event_phase_mask' => 'int',
		'event_chance' => 'int',
		'event_flags' => 'int',
		'event_param1' => 'int',
		'event_param2' => 'int',
		'event_param3' => 'int',
		'event_param4' => 'int',
		'action_type' => 'int',
		'action_param1' => 'int',
		'action_param2' => 'int',
		'action_param3' => 'int',
		'action_param4' => 'int',
		'action_param5' => 'int',
		'action_param6' => 'int',
		'target_type' => 'int',
		'target_param1' => 'int',
		'target_param2' => 'int',
		'target_param3' => 'int',
		'target_x' => 'float',
		'target_y' => 'float',
		'target_z' => 'float',
		'target_o' => 'float'
	];

	protected $fillable = [
		'event_type',
		'event_phase_mask',
		'event_chance',
		'event_flags',
		'event_param1',
		'event_param2',
		'event_param3',
		'event_param4',
		'action_type',
		'action_param1',
		'action_param2',
		'action_param3',
		'action_param4',
		'action_param5',
		'action_param6',
		'target_type',
		'target_param1',
		'target_param2',
		'target_param3',
		'target_x',
		'target_y',
		'target_z',
		'target_o',
		'comment'
	];
}
