<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ReferenceLootTemplate
 * 
 * @property int $Entry
 * @property int $Item
 * @property int $Reference
 * @property float $Chance
 * @property bool $QuestRequired
 * @property int $LootMode
 * @property int $GroupId
 * @property int $MinCount
 * @property int $MaxCount
 * @property string $Comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ReferenceLootTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'reference_loot_template';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Entry' => 'int',
		'Item' => 'int',
		'Reference' => 'int',
		'Chance' => 'float',
		'QuestRequired' => 'bool',
		'LootMode' => 'int',
		'GroupId' => 'int',
		'MinCount' => 'int',
		'MaxCount' => 'int'
	];

	protected $fillable = [
		'Reference',
		'Chance',
		'QuestRequired',
		'LootMode',
		'GroupId',
		'MinCount',
		'MaxCount',
		'Comment'
	];
}
