<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ExplorationBasexp
 * 
 * @property int $level
 * @property int $basexp
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ExplorationBasexp extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'exploration_basexp';
	protected $primaryKey = 'level';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'level' => 'int',
		'basexp' => 'int'
	];

	protected $fillable = [
		'basexp'
	];
}
