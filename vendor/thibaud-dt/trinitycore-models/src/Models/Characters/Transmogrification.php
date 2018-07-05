<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Transmogrification
 * 
 * @property int $item
 * @property int $old_entry
 * @property int $new_entry
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Transmogrification extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'transmogrification';
	protected $primaryKey = 'item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'item' => 'int',
		'old_entry' => 'int',
		'new_entry' => 'int'
	];

	protected $fillable = [
		'old_entry',
		'new_entry'
	];
}
