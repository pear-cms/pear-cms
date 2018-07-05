<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CmAutospellcasterCategory
 * 
 * @property int $id
 * @property int $targetID
 * @property int $spell
 * @property int $min_time
 * @property int $max_time
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CmAutospellcasterCategory extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'cm_autospellcaster_category';
	public $timestamps = false;

	protected $casts = [
		'targetID' => 'int',
		'spell' => 'int',
		'min_time' => 'int',
		'max_time' => 'int'
	];

	protected $fillable = [
		'targetID',
		'spell',
		'min_time',
		'max_time'
	];
}
