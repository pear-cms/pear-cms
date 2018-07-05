<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventGameobject
 * 
 * @property int $eventEntry
 * @property int $guid
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventGameobject extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_gameobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'guid' => 'int'
	];
}
