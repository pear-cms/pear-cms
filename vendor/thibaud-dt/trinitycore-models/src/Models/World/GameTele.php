<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameTele
 * 
 * @property int $id
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property float $orientation
 * @property int $map
 * @property string $name
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameTele extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_tele';
	public $timestamps = false;

	protected $casts = [
		'position_x' => 'float',
		'position_y' => 'float',
		'position_z' => 'float',
		'orientation' => 'float',
		'map' => 'int'
	];

	protected $fillable = [
		'position_x',
		'position_y',
		'position_z',
		'orientation',
		'map',
		'name'
	];
}
