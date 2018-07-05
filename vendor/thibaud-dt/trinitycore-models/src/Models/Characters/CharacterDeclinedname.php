<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterDeclinedname
 * 
 * @property int $guid
 * @property string $genitive
 * @property string $dative
 * @property string $accusative
 * @property string $instrumental
 * @property string $prepositional
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterDeclinedname extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_declinedname';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int'
	];

	protected $fillable = [
		'genitive',
		'dative',
		'accusative',
		'instrumental',
		'prepositional'
	];
}
