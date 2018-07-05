<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CmAutospellcasterTarget
 * 
 * @property int $groupID
 * @property int $id
 * @property float $x
 * @property float $y
 * @property float $z
 * @property int $map
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CmAutospellcasterTarget extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'groupID' => 'int',
		'id' => 'int',
		'x' => 'float',
		'y' => 'float',
		'z' => 'float',
		'map' => 'int'
	];

	protected $fillable = [
		'x',
		'y',
		'z',
		'map'
	];
}
