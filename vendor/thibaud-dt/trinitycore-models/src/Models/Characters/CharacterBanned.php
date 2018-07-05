<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterBanned
 * 
 * @property int $guid
 * @property int $bandate
 * @property int $unbandate
 * @property string $bannedby
 * @property string $banreason
 * @property int $active
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterBanned extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_banned';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'bandate' => 'int',
		'unbandate' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'unbandate',
		'bannedby',
		'banreason',
		'active'
	];
}
