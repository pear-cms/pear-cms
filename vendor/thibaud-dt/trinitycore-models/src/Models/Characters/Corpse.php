<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Corpse
 * 
 * @property int $guid
 * @property float $posX
 * @property float $posY
 * @property float $posZ
 * @property float $orientation
 * @property int $mapId
 * @property int $phaseMask
 * @property int $displayId
 * @property string $itemCache
 * @property int $bytes1
 * @property int $bytes2
 * @property int $guildId
 * @property int $flags
 * @property int $dynFlags
 * @property int $time
 * @property int $corpseType
 * @property int $instanceId
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Corpse extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'corpse';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'posX' => 'float',
		'posY' => 'float',
		'posZ' => 'float',
		'orientation' => 'float',
		'mapId' => 'int',
		'phaseMask' => 'int',
		'displayId' => 'int',
		'bytes1' => 'int',
		'bytes2' => 'int',
		'guildId' => 'int',
		'flags' => 'int',
		'dynFlags' => 'int',
		'time' => 'int',
		'corpseType' => 'int',
		'instanceId' => 'int'
	];

	protected $fillable = [
		'posX',
		'posY',
		'posZ',
		'orientation',
		'mapId',
		'phaseMask',
		'displayId',
		'itemCache',
		'bytes1',
		'bytes2',
		'guildId',
		'flags',
		'dynFlags',
		'time',
		'corpseType',
		'instanceId'
	];
}
