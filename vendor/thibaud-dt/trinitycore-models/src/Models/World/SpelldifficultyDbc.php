<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpelldifficultyDbc
 * 
 * @property int $id
 * @property int $spellid0
 * @property int $spellid1
 * @property int $spellid2
 * @property int $spellid3
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpelldifficultyDbc extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spelldifficulty_dbc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'spellid0' => 'int',
		'spellid1' => 'int',
		'spellid2' => 'int',
		'spellid3' => 'int'
	];

	protected $fillable = [
		'spellid0',
		'spellid1',
		'spellid2',
		'spellid3'
	];
}
