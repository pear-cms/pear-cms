<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemInstance
 * 
 * @property int $guid
 * @property int $itemEntry
 * @property int $owner_guid
 * @property int $creatorGuid
 * @property int $giftCreatorGuid
 * @property int $count
 * @property int $duration
 * @property string $charges
 * @property int $flags
 * @property string $enchantments
 * @property int $randomPropertyId
 * @property int $durability
 * @property int $playedTime
 * @property string $text
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ItemInstance extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'item_instance';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'itemEntry' => 'int',
		'owner_guid' => 'int',
		'creatorGuid' => 'int',
		'giftCreatorGuid' => 'int',
		'count' => 'int',
		'duration' => 'int',
		'flags' => 'int',
		'randomPropertyId' => 'int',
		'durability' => 'int',
		'playedTime' => 'int'
	];

	protected $fillable = [
		'itemEntry',
		'owner_guid',
		'creatorGuid',
		'giftCreatorGuid',
		'count',
		'duration',
		'charges',
		'flags',
		'enchantments',
		'randomPropertyId',
		'durability',
		'playedTime',
		'text'
	];
}
