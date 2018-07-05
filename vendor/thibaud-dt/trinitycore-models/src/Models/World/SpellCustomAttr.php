<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellCustomAttr
 * 
 * @property int $entry
 * @property int $attributes
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellCustomAttr extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_custom_attr';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'attributes' => 'int'
	];

	protected $fillable = [
		'attributes'
	];
}
