<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemEnchantmentTemplate
 * 
 * @property int $entry
 * @property int $ench
 * @property float $chance
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ItemEnchantmentTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'item_enchantment_template';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'ench' => 'int',
		'chance' => 'float'
	];

	protected $fillable = [
		'chance'
	];
}
