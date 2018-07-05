<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AreatriggerTeleport
 * 
 * @property int $ID
 * @property string $Name
 * @property int $target_map
 * @property float $target_position_x
 * @property float $target_position_y
 * @property float $target_position_z
 * @property float $target_orientation
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class AreatriggerTeleport extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'areatrigger_teleport';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'target_map' => 'int',
		'target_position_x' => 'float',
		'target_position_y' => 'float',
		'target_position_z' => 'float',
		'target_orientation' => 'float',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'Name',
		'target_map',
		'target_position_x',
		'target_position_y',
		'target_position_z',
		'target_orientation',
		'VerifiedBuild'
	];
}
