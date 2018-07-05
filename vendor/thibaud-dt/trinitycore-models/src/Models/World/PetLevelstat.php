<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PetLevelstat
 * 
 * @property int $creature_entry
 * @property int $level
 * @property int $hp
 * @property int $mana
 * @property int $armor
 * @property int $str
 * @property int $agi
 * @property int $sta
 * @property int $inte
 * @property int $spi
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PetLevelstat extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'creature_entry' => 'int',
		'level' => 'int',
		'hp' => 'int',
		'mana' => 'int',
		'armor' => 'int',
		'str' => 'int',
		'agi' => 'int',
		'sta' => 'int',
		'inte' => 'int',
		'spi' => 'int'
	];

	protected $fillable = [
		'hp',
		'mana',
		'armor',
		'str',
		'agi',
		'sta',
		'inte',
		'spi'
	];
}
