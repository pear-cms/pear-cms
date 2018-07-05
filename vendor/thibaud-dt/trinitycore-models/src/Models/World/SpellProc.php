<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellProc
 * 
 * @property int $spellId
 * @property int $schoolMask
 * @property int $spellFamilyName
 * @property int $spellFamilyMask0
 * @property int $spellFamilyMask1
 * @property int $spellFamilyMask2
 * @property int $typeMask
 * @property int $spellTypeMask
 * @property int $spellPhaseMask
 * @property int $hitMask
 * @property int $attributesMask
 * @property float $ratePerMinute
 * @property float $chance
 * @property float $cooldown
 * @property int $charges
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellProc extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_proc';
	protected $primaryKey = 'spellId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spellId' => 'int',
		'schoolMask' => 'int',
		'spellFamilyName' => 'int',
		'spellFamilyMask0' => 'int',
		'spellFamilyMask1' => 'int',
		'spellFamilyMask2' => 'int',
		'typeMask' => 'int',
		'spellTypeMask' => 'int',
		'spellPhaseMask' => 'int',
		'hitMask' => 'int',
		'attributesMask' => 'int',
		'ratePerMinute' => 'float',
		'chance' => 'float',
		'cooldown' => 'float',
		'charges' => 'int'
	];

	protected $fillable = [
		'schoolMask',
		'spellFamilyName',
		'spellFamilyMask0',
		'spellFamilyMask1',
		'spellFamilyMask2',
		'typeMask',
		'spellTypeMask',
		'spellPhaseMask',
		'hitMask',
		'attributesMask',
		'ratePerMinute',
		'chance',
		'cooldown',
		'charges'
	];
}
