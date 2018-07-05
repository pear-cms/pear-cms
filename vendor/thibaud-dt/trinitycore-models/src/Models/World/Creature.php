<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Creature
 * 
 * @property int $guid
 * @property int $id
 * @property int $map
 * @property int $zoneId
 * @property int $areaId
 * @property int $spawnMask
 * @property int $phaseMask
 * @property int $modelid
 * @property int $equipment_id
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property float $orientation
 * @property int $spawntimesecs
 * @property float $spawndist
 * @property int $currentwaypoint
 * @property int $curhealth
 * @property int $curmana
 * @property int $MovementType
 * @property int $npcflag
 * @property int $unit_flags
 * @property int $dynamicflags
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Creature extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature';
	protected $primaryKey = 'guid';
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'map' => 'int',
		'zoneId' => 'int',
		'areaId' => 'int',
		'spawnMask' => 'int',
		'phaseMask' => 'int',
		'modelid' => 'int',
		'equipment_id' => 'int',
		'position_x' => 'float',
		'position_y' => 'float',
		'position_z' => 'float',
		'orientation' => 'float',
		'spawntimesecs' => 'int',
		'spawndist' => 'float',
		'currentwaypoint' => 'int',
		'curhealth' => 'int',
		'curmana' => 'int',
		'MovementType' => 'int',
		'npcflag' => 'int',
		'unit_flags' => 'int',
		'dynamicflags' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'id',
		'map',
		'zoneId',
		'areaId',
		'spawnMask',
		'phaseMask',
		'modelid',
		'equipment_id',
		'position_x',
		'position_y',
		'position_z',
		'orientation',
		'spawntimesecs',
		'spawndist',
		'currentwaypoint',
		'curhealth',
		'curmana',
		'MovementType',
		'npcflag',
		'unit_flags',
		'dynamicflags',
		'VerifiedBuild'
	];
}
