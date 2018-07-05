<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SkillDiscoveryTemplate
 * 
 * @property int $spellId
 * @property int $reqSpell
 * @property int $reqSkillValue
 * @property float $chance
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SkillDiscoveryTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'skill_discovery_template';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spellId' => 'int',
		'reqSpell' => 'int',
		'reqSkillValue' => 'int',
		'chance' => 'float'
	];

	protected $fillable = [
		'reqSkillValue',
		'chance'
	];
}
