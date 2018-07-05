<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerXpForLevel
 * 
 * @property int $Level
 * @property int $Experience
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayerXpForLevel extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'player_xp_for_level';
	protected $primaryKey = 'Level';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Level' => 'int',
		'Experience' => 'int'
	];

	protected $fillable = [
		'Experience'
	];
}
