<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellGroupStackRule
 * 
 * @property int $group_id
 * @property int $stack_rule
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellGroupStackRule extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'group_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'group_id' => 'int',
		'stack_rule' => 'int'
	];

	protected $fillable = [
		'stack_rule'
	];
}
