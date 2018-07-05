<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PvpstatsBattleground
 * 
 * @property int $id
 * @property int $winner_faction
 * @property int $bracket_id
 * @property int $type
 * @property \Carbon\Carbon $date
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PvpstatsBattleground extends Eloquent
{
	protected $connection = 'characters';
	public $timestamps = false;

	protected $casts = [
		'winner_faction' => 'int',
		'bracket_id' => 'int',
		'type' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'winner_faction',
		'bracket_id',
		'type',
		'date'
	];
}
