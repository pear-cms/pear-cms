<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureEquipTemplate
 * 
 * @property int $CreatureID
 * @property int $ID
 * @property int $ItemID1
 * @property int $ItemID2
 * @property int $ItemID3
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureEquipTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_equip_template';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CreatureID' => 'int',
		'ID' => 'int',
		'ItemID1' => 'int',
		'ItemID2' => 'int',
		'ItemID3' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'ItemID1',
		'ItemID2',
		'ItemID3',
		'VerifiedBuild'
	];
}
