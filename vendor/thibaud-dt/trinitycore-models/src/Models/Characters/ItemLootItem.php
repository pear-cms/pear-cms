<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemLootItem
 * 
 * @property int $container_id
 * @property int $item_id
 * @property int $item_count
 * @property bool $follow_rules
 * @property bool $ffa
 * @property bool $blocked
 * @property bool $counted
 * @property bool $under_threshold
 * @property bool $needs_quest
 * @property int $rnd_prop
 * @property int $rnd_suffix
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ItemLootItem extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'container_id' => 'int',
		'item_id' => 'int',
		'item_count' => 'int',
		'follow_rules' => 'bool',
		'ffa' => 'bool',
		'blocked' => 'bool',
		'counted' => 'bool',
		'under_threshold' => 'bool',
		'needs_quest' => 'bool',
		'rnd_prop' => 'int',
		'rnd_suffix' => 'int'
	];

	protected $fillable = [
		'container_id',
		'item_id',
		'item_count',
		'follow_rules',
		'ffa',
		'blocked',
		'counted',
		'under_threshold',
		'needs_quest',
		'rnd_prop',
		'rnd_suffix'
	];
}
