<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CraftActiveCmd
 * 
 * @property int $id
 * @property int $command
 * @property int $count
 * @property int $remaining
 * @property int $to_loot
 * @property int $player
 * @property int $start
 * @property int $duration
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CraftActiveCmd extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'craft_active_cmd';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'command' => 'int',
		'count' => 'int',
		'remaining' => 'int',
		'to_loot' => 'int',
		'player' => 'int',
		'start' => 'int',
		'duration' => 'int'
	];

	protected $fillable = [
		'command',
		'count',
		'remaining',
		'to_loot',
		'player',
		'start',
		'duration'
	];
}
