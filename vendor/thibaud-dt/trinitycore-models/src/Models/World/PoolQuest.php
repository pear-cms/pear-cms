<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PoolQuest
 * 
 * @property int $entry
 * @property int $pool_entry
 * @property string $description
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PoolQuest extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'pool_quest';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'pool_entry' => 'int'
	];

	protected $fillable = [
		'pool_entry',
		'description'
	];
}
