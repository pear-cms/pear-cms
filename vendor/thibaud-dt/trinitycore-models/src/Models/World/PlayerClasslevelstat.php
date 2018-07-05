<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerClasslevelstat
 * 
 * @property int $class
 * @property int $level
 * @property int $basehp
 * @property int $basemana
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayerClasslevelstat extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'class' => 'int',
		'level' => 'int',
		'basehp' => 'int',
		'basemana' => 'int'
	];

	protected $fillable = [
		'basehp',
		'basemana'
	];
}
