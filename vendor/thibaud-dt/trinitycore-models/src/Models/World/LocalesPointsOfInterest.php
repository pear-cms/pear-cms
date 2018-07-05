<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesPointsOfInterest
 * 
 * @property int $entry
 * @property string $icon_name_loc1
 * @property string $icon_name_loc2
 * @property string $icon_name_loc3
 * @property string $icon_name_loc4
 * @property string $icon_name_loc5
 * @property string $icon_name_loc6
 * @property string $icon_name_loc7
 * @property string $icon_name_loc8
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesPointsOfInterest extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_points_of_interest';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int'
	];

	protected $fillable = [
		'icon_name_loc1',
		'icon_name_loc2',
		'icon_name_loc3',
		'icon_name_loc4',
		'icon_name_loc5',
		'icon_name_loc6',
		'icon_name_loc7',
		'icon_name_loc8'
	];
}
