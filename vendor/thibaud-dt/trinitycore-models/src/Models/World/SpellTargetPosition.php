<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellTargetPosition
 * 
 * @property int $ID
 * @property int $EffectIndex
 * @property int $MapID
 * @property float $PositionX
 * @property float $PositionY
 * @property float $PositionZ
 * @property float $Orientation
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellTargetPosition extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_target_position';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'EffectIndex' => 'int',
		'MapID' => 'int',
		'PositionX' => 'float',
		'PositionY' => 'float',
		'PositionZ' => 'float',
		'Orientation' => 'float',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'MapID',
		'PositionX',
		'PositionY',
		'PositionZ',
		'Orientation',
		'VerifiedBuild'
	];
}
