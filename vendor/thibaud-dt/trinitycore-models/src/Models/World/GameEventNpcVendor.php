<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventNpcVendor
 * 
 * @property int $eventEntry
 * @property int $guid
 * @property int $slot
 * @property int $item
 * @property int $maxcount
 * @property int $incrtime
 * @property int $ExtendedCost
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventNpcVendor extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_npc_vendor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'guid' => 'int',
		'slot' => 'int',
		'item' => 'int',
		'maxcount' => 'int',
		'incrtime' => 'int',
		'ExtendedCost' => 'int'
	];

	protected $fillable = [
		'eventEntry',
		'slot',
		'maxcount',
		'incrtime',
		'ExtendedCost'
	];
}
