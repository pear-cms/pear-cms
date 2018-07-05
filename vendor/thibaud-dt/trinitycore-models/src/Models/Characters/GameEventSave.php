<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventSave
 * 
 * @property int $eventEntry
 * @property int $state
 * @property int $next_start
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventSave extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'game_event_save';
	protected $primaryKey = 'eventEntry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'state' => 'int',
		'next_start' => 'int'
	];

	protected $fillable = [
		'state',
		'next_start'
	];
}
