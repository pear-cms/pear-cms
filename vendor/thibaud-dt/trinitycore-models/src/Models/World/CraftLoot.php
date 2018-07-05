<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CraftLoot
 * 
 * @property int $id
 * @property int $item
 * @property int $min
 * @property int $max
 * @property float $chance
 * @property int $reputation_required
 * @property int $reputation_level
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CraftLoot extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'craft_loot';
	public $timestamps = false;

	protected $casts = [
		'item' => 'int',
		'min' => 'int',
		'max' => 'int',
		'chance' => 'float',
		'reputation_required' => 'int',
		'reputation_level' => 'int'
	];

	protected $fillable = [
		'min',
		'max',
		'chance',
		'reputation_required',
		'reputation_level'
	];
}
