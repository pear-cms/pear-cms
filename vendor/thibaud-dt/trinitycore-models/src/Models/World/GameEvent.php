<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEvent
 * 
 * @property int $eventEntry
 * @property \Carbon\Carbon $start_time
 * @property \Carbon\Carbon $end_time
 * @property int $occurence
 * @property int $length
 * @property int $holiday
 * @property string $description
 * @property int $world_event
 * @property int $announce
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEvent extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event';
	protected $primaryKey = 'eventEntry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'occurence' => 'int',
		'length' => 'int',
		'holiday' => 'int',
		'world_event' => 'int',
		'announce' => 'int'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'start_time',
		'end_time',
		'occurence',
		'length',
		'holiday',
		'description',
		'world_event',
		'announce'
	];
}
