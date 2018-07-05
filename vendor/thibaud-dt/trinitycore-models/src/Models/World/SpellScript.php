<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellScript
 * 
 * @property int $id
 * @property int $effIndex
 * @property int $delay
 * @property int $command
 * @property int $datalong
 * @property int $datalong2
 * @property int $dataint
 * @property float $x
 * @property float $y
 * @property float $z
 * @property float $o
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellScript extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'effIndex' => 'int',
		'delay' => 'int',
		'command' => 'int',
		'datalong' => 'int',
		'datalong2' => 'int',
		'dataint' => 'int',
		'x' => 'float',
		'y' => 'float',
		'z' => 'float',
		'o' => 'float'
	];

	protected $fillable = [
		'id',
		'effIndex',
		'delay',
		'command',
		'datalong',
		'datalong2',
		'dataint',
		'x',
		'y',
		'z',
		'o'
	];
}
