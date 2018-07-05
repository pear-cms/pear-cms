<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesItem
 * 
 * @property int $entry
 * @property string $name_loc1
 * @property string $name_loc2
 * @property string $name_loc3
 * @property string $name_loc4
 * @property string $name_loc5
 * @property string $name_loc6
 * @property string $name_loc7
 * @property string $name_loc8
 * @property string $description_loc1
 * @property string $description_loc2
 * @property string $description_loc3
 * @property string $description_loc4
 * @property string $description_loc5
 * @property string $description_loc6
 * @property string $description_loc7
 * @property string $description_loc8
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesItem extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_item';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'name_loc1',
		'name_loc2',
		'name_loc3',
		'name_loc4',
		'name_loc5',
		'name_loc6',
		'name_loc7',
		'name_loc8',
		'description_loc1',
		'description_loc2',
		'description_loc3',
		'description_loc4',
		'description_loc5',
		'description_loc6',
		'description_loc7',
		'description_loc8',
		'VerifiedBuild'
	];
}
