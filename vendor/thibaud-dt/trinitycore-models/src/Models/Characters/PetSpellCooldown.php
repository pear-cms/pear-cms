<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PetSpellCooldown
 * 
 * @property int $guid
 * @property int $spell
 * @property int $time
 * @property int $categoryId
 * @property int $categoryEnd
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PetSpellCooldown extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'pet_spell_cooldown';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'spell' => 'int',
		'time' => 'int',
		'categoryId' => 'int',
		'categoryEnd' => 'int'
	];

	protected $fillable = [
		'time',
		'categoryId',
		'categoryEnd'
	];
}
