<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ArenaTeamMember
 * 
 * @property int $arenaTeamId
 * @property int $guid
 * @property int $weekGames
 * @property int $weekWins
 * @property int $seasonGames
 * @property int $seasonWins
 * @property int $personalRating
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ArenaTeamMember extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'arena_team_member';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'arenaTeamId' => 'int',
		'guid' => 'int',
		'weekGames' => 'int',
		'weekWins' => 'int',
		'seasonGames' => 'int',
		'seasonWins' => 'int',
		'personalRating' => 'int'
	];

	protected $fillable = [
		'weekGames',
		'weekWins',
		'seasonGames',
		'seasonWins',
		'personalRating'
	];
}
