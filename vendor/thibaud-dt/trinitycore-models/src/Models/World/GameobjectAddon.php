<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameobjectAddon
 * 
 * @property int $guid
 * @property int $invisibilityType
 * @property int $invisibilityValue
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameobjectAddon extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'gameobject_addon';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'invisibilityType' => 'int',
		'invisibilityValue' => 'int'
	];

	protected $fillable = [
		'invisibilityType',
		'invisibilityValue'
	];
}
