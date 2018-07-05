<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterAccountDatum
 * 
 * @property int $guid
 * @property int $type
 * @property int $time
 * @property boolean $data
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterAccountDatum extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'type' => 'int',
		'time' => 'int',
		'data' => 'boolean'
	];

	protected $fillable = [
		'time',
		'data'
	];
}
