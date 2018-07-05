<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureClasslevelstat
 * 
 * @property int $level
 * @property int $class
 * @property int $basehp0
 * @property int $basehp1
 * @property int $basehp2
 * @property int $basemana
 * @property int $basearmor
 * @property int $attackpower
 * @property int $rangedattackpower
 * @property float $damage_base
 * @property float $damage_exp1
 * @property float $damage_exp2
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureClasslevelstat extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'level' => 'int',
		'class' => 'int',
		'basehp0' => 'int',
		'basehp1' => 'int',
		'basehp2' => 'int',
		'basemana' => 'int',
		'basearmor' => 'int',
		'attackpower' => 'int',
		'rangedattackpower' => 'int',
		'damage_base' => 'float',
		'damage_exp1' => 'float',
		'damage_exp2' => 'float'
	];

	protected $fillable = [
		'basehp0',
		'basehp1',
		'basehp2',
		'basemana',
		'basearmor',
		'attackpower',
		'rangedattackpower',
		'damage_base',
		'damage_exp1',
		'damage_exp2',
		'comment'
	];
}
