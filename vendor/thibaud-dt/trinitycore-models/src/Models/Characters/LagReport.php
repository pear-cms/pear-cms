<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LagReport
 * 
 * @property int $reportId
 * @property int $guid
 * @property int $lagType
 * @property int $mapId
 * @property float $posX
 * @property float $posY
 * @property float $posZ
 * @property int $latency
 * @property int $createTime
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LagReport extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'reportId';
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'lagType' => 'int',
		'mapId' => 'int',
		'posX' => 'float',
		'posY' => 'float',
		'posZ' => 'float',
		'latency' => 'int',
		'createTime' => 'int'
	];

	protected $fillable = [
		'guid',
		'lagType',
		'mapId',
		'posX',
		'posY',
		'posZ',
		'latency',
		'createTime'
	];
}
