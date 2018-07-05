<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterReputation
 * 
 * @property int $guid
 * @property int $faction
 * @property int $standing
 * @property int $flags
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterReputation extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_reputation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'faction' => 'int',
		'standing' => 'int',
		'flags' => 'int'
	];

	protected $fillable = [
		'standing',
		'flags'
	];
}
