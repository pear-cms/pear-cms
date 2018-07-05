<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Disable
 * 
 * @property int $sourceType
 * @property int $entry
 * @property int $flags
 * @property string $params_0
 * @property string $params_1
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Disable extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sourceType' => 'int',
		'entry' => 'int',
		'flags' => 'int'
	];

	protected $fillable = [
		'flags',
		'params_0',
		'params_1',
		'comment'
	];
}
