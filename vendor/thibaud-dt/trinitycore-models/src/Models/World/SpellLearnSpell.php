<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellLearnSpell
 * 
 * @property int $entry
 * @property int $SpellID
 * @property int $Active
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellLearnSpell extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_learn_spell';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'SpellID' => 'int',
		'Active' => 'int'
	];

	protected $fillable = [
		'Active'
	];
}
