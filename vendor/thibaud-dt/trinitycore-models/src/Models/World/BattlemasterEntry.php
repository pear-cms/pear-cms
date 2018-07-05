<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class BattlemasterEntry
 * 
 * @property int $entry
 * @property int $bg_template
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class BattlemasterEntry extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'battlemaster_entry';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'bg_template' => 'int'
	];

	protected $fillable = [
		'bg_template'
	];
}
