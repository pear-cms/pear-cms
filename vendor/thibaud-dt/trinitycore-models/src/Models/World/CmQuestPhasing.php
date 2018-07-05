<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CmQuestPhasing
 * 
 * @property int $questID
 * @property int $state
 * @property int $areaID
 * @property int $zoneID
 * @property int $phase
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CmQuestPhasing extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'cm_quest_phasing';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'questID' => 'int',
		'state' => 'int',
		'areaID' => 'int',
		'zoneID' => 'int',
		'phase' => 'int'
	];

	protected $fillable = [
		'state',
		'phase'
	];
}
