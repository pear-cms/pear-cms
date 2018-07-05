<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class WardenCheck
 * 
 * @property int $id
 * @property int $type
 * @property string $data
 * @property string $str
 * @property int $address
 * @property int $length
 * @property string $result
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class WardenCheck extends Eloquent
{
	protected $connection = 'world';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'address' => 'int',
		'length' => 'int'
	];

	protected $fillable = [
		'type',
		'data',
		'str',
		'address',
		'length',
		'result',
		'comment'
	];
}
