<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ArenaTeam
 * 
 * @property int $arenaTeamId
 * @property string $name
 * @property int $captainGuid
 * @property int $type
 * @property int $rating
 * @property int $seasonGames
 * @property int $seasonWins
 * @property int $weekGames
 * @property int $weekWins
 * @property int $rank
 * @property int $backgroundColor
 * @property int $emblemStyle
 * @property int $emblemColor
 * @property int $borderStyle
 * @property int $borderColor
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ArenaTeam extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'arena_team';
	protected $primaryKey = 'arenaTeamId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'arenaTeamId' => 'int',
		'captainGuid' => 'int',
		'type' => 'int',
		'rating' => 'int',
		'seasonGames' => 'int',
		'seasonWins' => 'int',
		'weekGames' => 'int',
		'weekWins' => 'int',
		'rank' => 'int',
		'backgroundColor' => 'int',
		'emblemStyle' => 'int',
		'emblemColor' => 'int',
		'borderStyle' => 'int',
		'borderColor' => 'int'
	];

	protected $fillable = [
		'name',
		'captainGuid',
		'type',
		'rating',
		'seasonGames',
		'seasonWins',
		'weekGames',
		'weekWins',
		'rank',
		'backgroundColor',
		'emblemStyle',
		'emblemColor',
		'borderStyle',
		'borderColor'
	];
}
