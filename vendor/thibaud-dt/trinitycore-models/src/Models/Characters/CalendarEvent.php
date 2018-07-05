<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CalendarEvent
 * 
 * @property int $id
 * @property int $creator
 * @property string $title
 * @property string $description
 * @property bool $type
 * @property int $dungeon
 * @property int $eventtime
 * @property int $flags
 * @property int $time2
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CalendarEvent extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'creator' => 'int',
		'type' => 'bool',
		'dungeon' => 'int',
		'eventtime' => 'int',
		'flags' => 'int',
		'time2' => 'int'
	];

	protected $fillable = [
		'creator',
		'title',
		'description',
		'type',
		'dungeon',
		'eventtime',
		'flags',
		'time2'
	];
}
