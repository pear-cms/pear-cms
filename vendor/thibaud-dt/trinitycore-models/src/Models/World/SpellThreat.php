<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellThreat
 * 
 * @property int $entry
 * @property int $flatMod
 * @property float $pctMod
 * @property float $apPctMod
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellThreat extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_threat';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'flatMod' => 'int',
		'pctMod' => 'float',
		'apPctMod' => 'float'
	];

	protected $fillable = [
		'flatMod',
		'pctMod',
		'apPctMod'
	];
}
