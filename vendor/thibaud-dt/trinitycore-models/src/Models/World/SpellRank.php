<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellRank
 * 
 * @property int $first_spell_id
 * @property int $spell_id
 * @property int $rank
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellRank extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'first_spell_id' => 'int',
		'spell_id' => 'int',
		'rank' => 'int'
	];

	protected $fillable = [
		'spell_id'
	];
}
