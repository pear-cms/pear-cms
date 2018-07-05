<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterArenaStat
 * 
 * @property int $guid
 * @property int $slot
 * @property int $matchMakerRating
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterArenaStat extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'slot' => 'int',
		'matchMakerRating' => 'int'
	];

	protected $fillable = [
		'matchMakerRating'
	];
}
