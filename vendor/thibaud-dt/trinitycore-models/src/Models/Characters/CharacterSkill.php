<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterSkill
 * 
 * @property int $guid
 * @property int $skill
 * @property int $value
 * @property int $max
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterSkill extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'skill' => 'int',
		'value' => 'int',
		'max' => 'int'
	];

	protected $fillable = [
		'value',
		'max'
	];
}
