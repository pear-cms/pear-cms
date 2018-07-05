<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerFactionchangeTitle
 * 
 * @property int $alliance_id
 * @property int $horde_id
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayerFactionchangeTitle extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'alliance_id' => 'int',
		'horde_id' => 'int'
	];
}
