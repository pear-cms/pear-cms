<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AreatriggerTavern
 * 
 * @property int $id
 * @property string $name
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class AreatriggerTavern extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'areatrigger_tavern';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'name'
	];
}
