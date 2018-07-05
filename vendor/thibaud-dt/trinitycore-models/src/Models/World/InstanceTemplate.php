<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class InstanceTemplate
 * 
 * @property int $map
 * @property int $parent
 * @property string $script
 * @property int $allowMount
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class InstanceTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'instance_template';
	protected $primaryKey = 'map';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'map' => 'int',
		'parent' => 'int',
		'allowMount' => 'int'
	];

	protected $fillable = [
		'parent',
		'script',
		'allowMount'
	];
}
