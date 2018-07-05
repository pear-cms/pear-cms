<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemSetName
 * 
 * @property int $entry
 * @property string $name
 * @property int $InventoryType
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ItemSetName extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'InventoryType' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'name',
		'InventoryType',
		'VerifiedBuild'
	];
}
