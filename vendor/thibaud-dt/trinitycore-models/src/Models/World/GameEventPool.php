<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventPool
 * 
 * @property int $eventEntry
 * @property int $pool_entry
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventPool extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_pool';
	protected $primaryKey = 'pool_entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'pool_entry' => 'int'
	];

	protected $fillable = [
		'eventEntry'
	];
}
