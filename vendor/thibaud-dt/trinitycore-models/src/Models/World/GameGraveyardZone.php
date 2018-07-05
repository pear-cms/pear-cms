<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameGraveyardZone
 * 
 * @property int $id
 * @property int $ghost_zone
 * @property int $faction
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameGraveyardZone extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_graveyard_zone';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'ghost_zone' => 'int',
		'faction' => 'int'
	];

	protected $fillable = [
		'faction'
	];
}
