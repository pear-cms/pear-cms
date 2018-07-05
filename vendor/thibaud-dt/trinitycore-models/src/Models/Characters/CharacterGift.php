<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterGift
 * 
 * @property int $guid
 * @property int $item_guid
 * @property int $entry
 * @property int $flags
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterGift extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'item_guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'item_guid' => 'int',
		'entry' => 'int',
		'flags' => 'int'
	];

	protected $fillable = [
		'guid',
		'entry',
		'flags'
	];
}
