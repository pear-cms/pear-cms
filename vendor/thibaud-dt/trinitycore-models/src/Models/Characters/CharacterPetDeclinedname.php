<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterPetDeclinedname
 * 
 * @property int $id
 * @property int $owner
 * @property string $genitive
 * @property string $dative
 * @property string $accusative
 * @property string $instrumental
 * @property string $prepositional
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterPetDeclinedname extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_pet_declinedname';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'owner' => 'int'
	];

	protected $fillable = [
		'owner',
		'genitive',
		'dative',
		'accusative',
		'instrumental',
		'prepositional'
	];
}
