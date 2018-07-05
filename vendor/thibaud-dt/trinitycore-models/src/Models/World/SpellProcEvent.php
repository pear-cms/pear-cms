<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellProcEvent
 * 
 * @property int $entry
 * @property int $SchoolMask
 * @property int $SpellFamilyName
 * @property int $SpellFamilyMask0
 * @property int $SpellFamilyMask1
 * @property int $SpellFamilyMask2
 * @property int $procFlags
 * @property int $procEx
 * @property float $ppmRate
 * @property float $CustomChance
 * @property int $Cooldown
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellProcEvent extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_proc_event';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'SchoolMask' => 'int',
		'SpellFamilyName' => 'int',
		'SpellFamilyMask0' => 'int',
		'SpellFamilyMask1' => 'int',
		'SpellFamilyMask2' => 'int',
		'procFlags' => 'int',
		'procEx' => 'int',
		'ppmRate' => 'float',
		'CustomChance' => 'float',
		'Cooldown' => 'int'
	];

	protected $fillable = [
		'SchoolMask',
		'SpellFamilyName',
		'SpellFamilyMask0',
		'SpellFamilyMask1',
		'SpellFamilyMask2',
		'procFlags',
		'procEx',
		'ppmRate',
		'CustomChance',
		'Cooldown'
	];
}
