<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameWeather
 * 
 * @property int $zone
 * @property int $spring_rain_chance
 * @property int $spring_snow_chance
 * @property int $spring_storm_chance
 * @property int $summer_rain_chance
 * @property int $summer_snow_chance
 * @property int $summer_storm_chance
 * @property int $fall_rain_chance
 * @property int $fall_snow_chance
 * @property int $fall_storm_chance
 * @property int $winter_rain_chance
 * @property int $winter_snow_chance
 * @property int $winter_storm_chance
 * @property string $ScriptName
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameWeather extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_weather';
	protected $primaryKey = 'zone';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'zone' => 'int',
		'spring_rain_chance' => 'int',
		'spring_snow_chance' => 'int',
		'spring_storm_chance' => 'int',
		'summer_rain_chance' => 'int',
		'summer_snow_chance' => 'int',
		'summer_storm_chance' => 'int',
		'fall_rain_chance' => 'int',
		'fall_snow_chance' => 'int',
		'fall_storm_chance' => 'int',
		'winter_rain_chance' => 'int',
		'winter_snow_chance' => 'int',
		'winter_storm_chance' => 'int'
	];

	protected $fillable = [
		'spring_rain_chance',
		'spring_snow_chance',
		'spring_storm_chance',
		'summer_rain_chance',
		'summer_snow_chance',
		'summer_storm_chance',
		'fall_rain_chance',
		'fall_snow_chance',
		'fall_storm_chance',
		'winter_rain_chance',
		'winter_snow_chance',
		'winter_storm_chance',
		'ScriptName'
	];
}
