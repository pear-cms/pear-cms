<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class VehicleTemplateAccessory
 * 
 * @property int $entry
 * @property int $accessory_entry
 * @property int $seat_id
 * @property int $minion
 * @property string $description
 * @property int $summontype
 * @property int $summontimer
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class VehicleTemplateAccessory extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'vehicle_template_accessory';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'accessory_entry' => 'int',
		'seat_id' => 'int',
		'minion' => 'int',
		'summontype' => 'int',
		'summontimer' => 'int'
	];

	protected $fillable = [
		'accessory_entry',
		'minion',
		'description',
		'summontype',
		'summontimer'
	];
}
