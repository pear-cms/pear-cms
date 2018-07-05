<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterPet
 * 
 * @property int $id
 * @property int $entry
 * @property int $owner
 * @property int $modelid
 * @property int $CreatedBySpell
 * @property int $PetType
 * @property int $level
 * @property int $exp
 * @property int $Reactstate
 * @property string $name
 * @property int $renamed
 * @property int $slot
 * @property int $curhealth
 * @property int $curmana
 * @property int $curhappiness
 * @property int $savetime
 * @property string $abdata
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterPet extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_pet';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'entry' => 'int',
		'owner' => 'int',
		'modelid' => 'int',
		'CreatedBySpell' => 'int',
		'PetType' => 'int',
		'level' => 'int',
		'exp' => 'int',
		'Reactstate' => 'int',
		'renamed' => 'int',
		'slot' => 'int',
		'curhealth' => 'int',
		'curmana' => 'int',
		'curhappiness' => 'int',
		'savetime' => 'int'
	];

	protected $fillable = [
		'entry',
		'owner',
		'modelid',
		'CreatedBySpell',
		'PetType',
		'level',
		'exp',
		'Reactstate',
		'name',
		'renamed',
		'slot',
		'curhealth',
		'curmana',
		'curhappiness',
		'savetime',
		'abdata'
	];
}
