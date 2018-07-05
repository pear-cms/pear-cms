<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Transport
 * 
 * @property int $guid
 * @property int $entry
 * @property string $name
 * @property string $ScriptName
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Transport extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'guid';
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int'
	];

	protected $fillable = [
		'entry',
		'name',
		'ScriptName'
	];
}
