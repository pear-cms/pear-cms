<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerFactionchangeItem
 * 
 * @property int $race_A
 * @property int $alliance_id
 * @property string $commentA
 * @property int $race_H
 * @property int $horde_id
 * @property string $commentH
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayerFactionchangeItem extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'race_A' => 'int',
		'alliance_id' => 'int',
		'race_H' => 'int',
		'horde_id' => 'int'
	];

	protected $fillable = [
		'race_A',
		'commentA',
		'race_H',
		'commentH'
	];
}
