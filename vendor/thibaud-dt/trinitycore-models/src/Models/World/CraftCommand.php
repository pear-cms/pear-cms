<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CraftCommand
 * 
 * @property int $id
 * @property int $type
 * @property int $duration
 * @property int $loot_id
 * @property int $required_item
 * @property int $count
 * @property int $reputation
 * @property int $rep_level
 * @property int $rep_gain
 * @property int $skill_required
 * @property int $skill_level
 * @property string $description
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CraftCommand extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'craft_command';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'duration' => 'int',
		'loot_id' => 'int',
		'required_item' => 'int',
		'count' => 'int',
		'reputation' => 'int',
		'rep_level' => 'int',
		'rep_gain' => 'int',
		'skill_required' => 'int',
		'skill_level' => 'int'
	];

	protected $fillable = [
		'type',
		'duration',
		'loot_id',
		'required_item',
		'count',
		'reputation',
		'rep_level',
		'rep_gain',
		'skill_required',
		'skill_level',
		'description'
	];
}
