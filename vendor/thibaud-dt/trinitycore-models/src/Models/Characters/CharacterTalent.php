<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterTalent
 * 
 * @property int $guid
 * @property int $spell
 * @property int $talentGroup
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterTalent extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_talent';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'spell' => 'int',
		'talentGroup' => 'int'
	];
}
