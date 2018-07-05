<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PetNameGeneration
 * 
 * @property int $id
 * @property string $word
 * @property int $entry
 * @property int $half
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PetNameGeneration extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'pet_name_generation';
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'half' => 'int'
	];

	protected $fillable = [
		'word',
		'entry',
		'half'
	];
}
