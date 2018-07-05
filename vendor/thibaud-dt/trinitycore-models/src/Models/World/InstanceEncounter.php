<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class InstanceEncounter
 * 
 * @property int $entry
 * @property int $creditType
 * @property int $creditEntry
 * @property int $lastEncounterDungeon
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class InstanceEncounter extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'creditType' => 'int',
		'creditEntry' => 'int',
		'lastEncounterDungeon' => 'int'
	];

	protected $fillable = [
		'creditType',
		'creditEntry',
		'lastEncounterDungeon',
		'comment'
	];
}
