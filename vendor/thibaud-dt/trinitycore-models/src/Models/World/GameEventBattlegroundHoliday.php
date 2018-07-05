<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventBattlegroundHoliday
 * 
 * @property int $eventEntry
 * @property int $bgflag
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventBattlegroundHoliday extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_battleground_holiday';
	protected $primaryKey = 'eventEntry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'bgflag' => 'int'
	];

	protected $fillable = [
		'bgflag'
	];
}
