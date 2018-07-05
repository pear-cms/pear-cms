<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventArenaSeason
 * 
 * @property int $eventEntry
 * @property int $season
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameEventArenaSeason extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'season' => 'int'
	];
}
