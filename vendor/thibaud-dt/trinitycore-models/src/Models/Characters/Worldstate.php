<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Worldstate
 * 
 * @property int $entry
 * @property int $value
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Worldstate extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'value' => 'int'
	];

	protected $fillable = [
		'value',
		'comment'
	];
}
