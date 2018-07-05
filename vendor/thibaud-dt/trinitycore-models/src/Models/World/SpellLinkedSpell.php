<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellLinkedSpell
 * 
 * @property int $spell_trigger
 * @property int $spell_effect
 * @property int $type
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellLinkedSpell extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_linked_spell';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spell_trigger' => 'int',
		'spell_effect' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'comment'
	];
}
