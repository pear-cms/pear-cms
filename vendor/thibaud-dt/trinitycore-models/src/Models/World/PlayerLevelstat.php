<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerLevelstat
 * 
 * @property int $race
 * @property int $class
 * @property int $level
 * @property int $str
 * @property int $agi
 * @property int $sta
 * @property int $inte
 * @property int $spi
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayerLevelstat extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'race' => 'int',
		'class' => 'int',
		'level' => 'int',
		'str' => 'int',
		'agi' => 'int',
		'sta' => 'int',
		'inte' => 'int',
		'spi' => 'int'
	];

	protected $fillable = [
		'str',
		'agi',
		'sta',
		'inte',
		'spi'
	];
}
