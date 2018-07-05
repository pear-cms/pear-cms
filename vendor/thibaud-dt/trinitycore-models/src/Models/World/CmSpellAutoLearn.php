<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CmSpellAutoLearn
 * 
 * @property int $learned
 * @property int $tolearn
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CmSpellAutoLearn extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'cm_spell_auto_learn';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'learned' => 'int',
		'tolearn' => 'int'
	];
}
