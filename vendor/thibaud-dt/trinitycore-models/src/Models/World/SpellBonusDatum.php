<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellBonusDatum
 * 
 * @property int $entry
 * @property float $direct_bonus
 * @property float $dot_bonus
 * @property float $ap_bonus
 * @property float $ap_dot_bonus
 * @property string $comments
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellBonusDatum extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'direct_bonus' => 'float',
		'dot_bonus' => 'float',
		'ap_bonus' => 'float',
		'ap_dot_bonus' => 'float'
	];

	protected $fillable = [
		'direct_bonus',
		'dot_bonus',
		'ap_bonus',
		'ap_dot_bonus',
		'comments'
	];
}
