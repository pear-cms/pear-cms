<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Gameobject
 * 
 * @property int $guid
 * @property int $id
 * @property int $map
 * @property int $zoneId
 * @property int $areaId
 * @property int $spawnMask
 * @property int $phaseMask
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property float $orientation
 * @property float $rotation0
 * @property float $rotation1
 * @property float $rotation2
 * @property float $rotation3
 * @property int $spawntimesecs
 * @property int $animprogress
 * @property int $state
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Gameobject extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'gameobject';
	protected $primaryKey = 'guid';
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'map' => 'int',
		'zoneId' => 'int',
		'areaId' => 'int',
		'spawnMask' => 'int',
		'phaseMask' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'position_z' => 'float',
		'orientation' => 'float',
		'rotation0' => 'float',
		'rotation1' => 'float',
		'rotation2' => 'float',
		'rotation3' => 'float',
		'spawntimesecs' => 'int',
		'animprogress' => 'int',
		'state' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'id',
		'map',
		'zoneId',
		'areaId',
		'spawnMask',
		'phaseMask',
		'position_x',
		'position_y',
		'position_z',
		'orientation',
		'rotation0',
		'rotation1',
		'rotation2',
		'rotation3',
		'spawntimesecs',
		'animprogress',
		'state',
		'VerifiedBuild'
	];
}
