<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CraftNpc
 * 
 * @property int $entry
 * @property int $command_type
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CraftNpc extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'craft_npc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'command_type' => 'int'
	];
}
