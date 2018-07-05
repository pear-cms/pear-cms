<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventSeasonalQuestrelation
 * 
 * @property int $questId
 * @property int $eventEntry
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventSeasonalQuestrelation extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_seasonal_questrelation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'questId' => 'int',
		'eventEntry' => 'int'
	];
}
