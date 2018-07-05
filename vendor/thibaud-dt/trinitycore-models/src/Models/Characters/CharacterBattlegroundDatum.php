<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterBattlegroundDatum
 * 
 * @property int $guid
 * @property int $instanceId
 * @property int $team
 * @property float $joinX
 * @property float $joinY
 * @property float $joinZ
 * @property float $joinO
 * @property int $joinMapId
 * @property int $taxiStart
 * @property int $taxiEnd
 * @property int $mountSpell
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterBattlegroundDatum extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'instanceId' => 'int',
		'team' => 'int',
		'joinX' => 'float',
		'joinY' => 'float',
		'joinZ' => 'float',
		'joinO' => 'float',
		'joinMapId' => 'int',
		'taxiStart' => 'int',
		'taxiEnd' => 'int',
		'mountSpell' => 'int'
	];

	protected $fillable = [
		'instanceId',
		'team',
		'joinX',
		'joinY',
		'joinZ',
		'joinO',
		'joinMapId',
		'taxiStart',
		'taxiEnd',
		'mountSpell'
	];
}
