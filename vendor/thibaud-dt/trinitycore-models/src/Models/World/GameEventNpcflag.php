<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventNpcflag
 * 
 * @property int $eventEntry
 * @property int $guid
 * @property int $npcflag
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventNpcflag extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_npcflag';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'guid' => 'int',
		'npcflag' => 'int'
	];

	protected $fillable = [
		'npcflag'
	];
}
