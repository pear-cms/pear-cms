<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PetitionSign
 * 
 * @property int $ownerguid
 * @property int $petitionguid
 * @property int $playerguid
 * @property int $player_account
 * @property int $type
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PetitionSign extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'petition_sign';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ownerguid' => 'int',
		'petitionguid' => 'int',
		'playerguid' => 'int',
		'player_account' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'ownerguid',
		'player_account',
		'type'
	];
}
