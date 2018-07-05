<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BattlegroundDeserter
 * 
 * @property int $guid
 * @property int $type
 * @property \Carbon\Carbon $datetime
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class BattlegroundDeserter extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'type' => 'int'
	];

	protected $dates = [
		'datetime'
	];

	protected $fillable = [
		'guid',
		'type',
		'datetime'
	];
}
