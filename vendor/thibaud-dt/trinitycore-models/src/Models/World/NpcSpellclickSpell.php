<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class NpcSpellclickSpell
 * 
 * @property int $npc_entry
 * @property int $spell_id
 * @property int $cast_flags
 * @property int $user_type
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class NpcSpellclickSpell extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'npc_entry' => 'int',
		'spell_id' => 'int',
		'cast_flags' => 'int',
		'user_type' => 'int'
	];

	protected $fillable = [
		'cast_flags',
		'user_type'
	];
}
