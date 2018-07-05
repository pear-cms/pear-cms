<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LfgDungeonTemplate
 * 
 * @property int $dungeonId
 * @property string $name
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property float $orientation
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LfgDungeonTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'lfg_dungeon_template';
	protected $primaryKey = 'dungeonId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dungeonId' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'position_z' => 'float',
		'orientation' => 'float',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'name',
		'position_x',
		'position_y',
		'position_z',
		'orientation',
		'VerifiedBuild'
	];
}
