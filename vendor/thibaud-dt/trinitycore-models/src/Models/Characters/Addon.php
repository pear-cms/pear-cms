<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Addon
 * 
 * @property string $name
 * @property int $crc
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Addon extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'name';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'crc' => 'int'
	];

	protected $fillable = [
		'crc'
	];
}
