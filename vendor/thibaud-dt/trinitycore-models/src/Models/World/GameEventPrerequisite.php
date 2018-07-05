<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventPrerequisite
 * 
 * @property int $eventEntry
 * @property int $prerequisite_event
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventPrerequisite extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_prerequisite';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'prerequisite_event' => 'int'
	];
}
