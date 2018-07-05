<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterSocial
 * 
 * @property int $guid
 * @property int $friend
 * @property int $flags
 * @property string $note
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterSocial extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_social';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'friend' => 'int',
		'flags' => 'int'
	];

	protected $fillable = [
		'note'
	];
}
