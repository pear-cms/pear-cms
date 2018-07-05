<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SkillFishingBaseLevel
 * 
 * @property int $entry
 * @property int $skill
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SkillFishingBaseLevel extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'skill_fishing_base_level';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'skill' => 'int'
	];

	protected $fillable = [
		'skill'
	];
}
