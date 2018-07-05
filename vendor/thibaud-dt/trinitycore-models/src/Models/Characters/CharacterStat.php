<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterStat
 * 
 * @property int $guid
 * @property int $maxhealth
 * @property int $maxpower1
 * @property int $maxpower2
 * @property int $maxpower3
 * @property int $maxpower4
 * @property int $maxpower5
 * @property int $maxpower6
 * @property int $maxpower7
 * @property int $strength
 * @property int $agility
 * @property int $stamina
 * @property int $intellect
 * @property int $spirit
 * @property int $armor
 * @property int $resHoly
 * @property int $resFire
 * @property int $resNature
 * @property int $resFrost
 * @property int $resShadow
 * @property int $resArcane
 * @property float $blockPct
 * @property float $dodgePct
 * @property float $parryPct
 * @property float $critPct
 * @property float $rangedCritPct
 * @property float $spellCritPct
 * @property int $attackPower
 * @property int $rangedAttackPower
 * @property int $spellPower
 * @property int $resilience
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterStat extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'maxhealth' => 'int',
		'maxpower1' => 'int',
		'maxpower2' => 'int',
		'maxpower3' => 'int',
		'maxpower4' => 'int',
		'maxpower5' => 'int',
		'maxpower6' => 'int',
		'maxpower7' => 'int',
		'strength' => 'int',
		'agility' => 'int',
		'stamina' => 'int',
		'intellect' => 'int',
		'spirit' => 'int',
		'armor' => 'int',
		'resHoly' => 'int',
		'resFire' => 'int',
		'resNature' => 'int',
		'resFrost' => 'int',
		'resShadow' => 'int',
		'resArcane' => 'int',
		'blockPct' => 'float',
		'dodgePct' => 'float',
		'parryPct' => 'float',
		'critPct' => 'float',
		'rangedCritPct' => 'float',
		'spellCritPct' => 'float',
		'attackPower' => 'int',
		'rangedAttackPower' => 'int',
		'spellPower' => 'int',
		'resilience' => 'int'
	];

	protected $fillable = [
		'maxhealth',
		'maxpower1',
		'maxpower2',
		'maxpower3',
		'maxpower4',
		'maxpower5',
		'maxpower6',
		'maxpower7',
		'strength',
		'agility',
		'stamina',
		'intellect',
		'spirit',
		'armor',
		'resHoly',
		'resFire',
		'resNature',
		'resFrost',
		'resShadow',
		'resArcane',
		'blockPct',
		'dodgePct',
		'parryPct',
		'critPct',
		'rangedCritPct',
		'spellCritPct',
		'attackPower',
		'rangedAttackPower',
		'spellPower',
		'resilience'
	];
}
