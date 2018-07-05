<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SkillExtraItemTemplate
 * 
 * @property int $spellId
 * @property int $requiredSpecialization
 * @property float $additionalCreateChance
 * @property int $additionalMaxNum
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SkillExtraItemTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'skill_extra_item_template';
	protected $primaryKey = 'spellId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spellId' => 'int',
		'requiredSpecialization' => 'int',
		'additionalCreateChance' => 'float',
		'additionalMaxNum' => 'int'
	];

	protected $fillable = [
		'requiredSpecialization',
		'additionalCreateChance',
		'additionalMaxNum'
	];
}
