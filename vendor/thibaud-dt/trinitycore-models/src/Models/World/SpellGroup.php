<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellGroup
 * 
 * @property int $id
 * @property int $spell_id
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellGroup extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_group';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'spell_id' => 'int'
	];
}
