<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Instance
 * 
 * @property int $id
 * @property int $map
 * @property int $resettime
 * @property int $difficulty
 * @property int $completedEncounters
 * @property string $data
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Instance extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'instance';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'map' => 'int',
		'resettime' => 'int',
		'difficulty' => 'int',
		'completedEncounters' => 'int'
	];

	protected $fillable = [
		'map',
		'resettime',
		'difficulty',
		'completedEncounters',
		'data'
	];
}
