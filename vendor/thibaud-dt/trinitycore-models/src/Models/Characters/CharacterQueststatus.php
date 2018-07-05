<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterQueststatus
 * 
 * @property int $guid
 * @property int $quest
 * @property int $status
 * @property int $explored
 * @property int $timer
 * @property int $mobcount1
 * @property int $mobcount2
 * @property int $mobcount3
 * @property int $mobcount4
 * @property int $itemcount1
 * @property int $itemcount2
 * @property int $itemcount3
 * @property int $itemcount4
 * @property int $playercount
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterQueststatus extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_queststatus';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'quest' => 'int',
		'status' => 'int',
		'explored' => 'int',
		'timer' => 'int',
		'mobcount1' => 'int',
		'mobcount2' => 'int',
		'mobcount3' => 'int',
		'mobcount4' => 'int',
		'itemcount1' => 'int',
		'itemcount2' => 'int',
		'itemcount3' => 'int',
		'itemcount4' => 'int',
		'playercount' => 'int'
	];

	protected $fillable = [
		'status',
		'explored',
		'timer',
		'mobcount1',
		'mobcount2',
		'mobcount3',
		'mobcount4',
		'itemcount1',
		'itemcount2',
		'itemcount3',
		'itemcount4',
		'playercount'
	];
}
