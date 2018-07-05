<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PoolQuestSave
 * 
 * @property int $pool_id
 * @property int $quest_id
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PoolQuestSave extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'pool_quest_save';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pool_id' => 'int',
		'quest_id' => 'int'
	];
}
