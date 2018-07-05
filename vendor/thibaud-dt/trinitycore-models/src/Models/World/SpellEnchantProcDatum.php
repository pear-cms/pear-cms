<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellEnchantProcDatum
 * 
 * @property int $entry
 * @property int $customChance
 * @property float $PPMChance
 * @property int $procEx
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellEnchantProcDatum extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'customChance' => 'int',
		'PPMChance' => 'float',
		'procEx' => 'int'
	];

	protected $fillable = [
		'customChance',
		'PPMChance',
		'procEx'
	];
}
