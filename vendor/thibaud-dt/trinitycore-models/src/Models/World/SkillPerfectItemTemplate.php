<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SkillPerfectItemTemplate
 * 
 * @property int $spellId
 * @property int $requiredSpecialization
 * @property float $perfectCreateChance
 * @property int $perfectItemType
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SkillPerfectItemTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'skill_perfect_item_template';
	protected $primaryKey = 'spellId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spellId' => 'int',
		'requiredSpecialization' => 'int',
		'perfectCreateChance' => 'float',
		'perfectItemType' => 'int'
	];

	protected $fillable = [
		'requiredSpecialization',
		'perfectCreateChance',
		'perfectItemType'
	];
}
