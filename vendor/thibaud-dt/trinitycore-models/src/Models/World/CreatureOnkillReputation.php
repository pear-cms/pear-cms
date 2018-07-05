<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureOnkillReputation
 * 
 * @property int $creature_id
 * @property int $RewOnKillRepFaction1
 * @property int $RewOnKillRepFaction2
 * @property int $MaxStanding1
 * @property int $IsTeamAward1
 * @property int $RewOnKillRepValue1
 * @property int $MaxStanding2
 * @property int $IsTeamAward2
 * @property int $RewOnKillRepValue2
 * @property int $TeamDependent
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureOnkillReputation extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_onkill_reputation';
	protected $primaryKey = 'creature_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'creature_id' => 'int',
		'RewOnKillRepFaction1' => 'int',
		'RewOnKillRepFaction2' => 'int',
		'MaxStanding1' => 'int',
		'IsTeamAward1' => 'int',
		'RewOnKillRepValue1' => 'int',
		'MaxStanding2' => 'int',
		'IsTeamAward2' => 'int',
		'RewOnKillRepValue2' => 'int',
		'TeamDependent' => 'int'
	];

	protected $fillable = [
		'RewOnKillRepFaction1',
		'RewOnKillRepFaction2',
		'MaxStanding1',
		'IsTeamAward1',
		'RewOnKillRepValue1',
		'MaxStanding2',
		'IsTeamAward2',
		'RewOnKillRepValue2',
		'TeamDependent'
	];
}
