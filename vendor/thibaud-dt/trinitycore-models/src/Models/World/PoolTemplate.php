<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PoolTemplate
 * 
 * @property int $entry
 * @property int $max_limit
 * @property string $description
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PoolTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'pool_template';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'max_limit' => 'int'
	];

	protected $fillable = [
		'max_limit',
		'description'
	];
}
