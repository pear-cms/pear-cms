<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellScriptName
 * 
 * @property int $spell_id
 * @property string $ScriptName
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellScriptName extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spell_id' => 'int'
	];
}
