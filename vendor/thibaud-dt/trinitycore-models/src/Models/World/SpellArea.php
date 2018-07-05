<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellArea
 * 
 * @property int $spell
 * @property int $area
 * @property int $quest_start
 * @property int $quest_end
 * @property int $aura_spell
 * @property int $racemask
 * @property int $gender
 * @property int $autocast
 * @property int $quest_start_status
 * @property int $quest_end_status
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellArea extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_area';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spell' => 'int',
		'area' => 'int',
		'quest_start' => 'int',
		'quest_end' => 'int',
		'aura_spell' => 'int',
		'racemask' => 'int',
		'gender' => 'int',
		'autocast' => 'int',
		'quest_start_status' => 'int',
		'quest_end_status' => 'int'
	];

	protected $fillable = [
		'quest_end',
		'autocast',
		'quest_start_status',
		'quest_end_status'
	];
}
