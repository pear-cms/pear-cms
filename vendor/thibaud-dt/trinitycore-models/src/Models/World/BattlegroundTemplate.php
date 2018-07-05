<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class BattlegroundTemplate
 * 
 * @property int $ID
 * @property int $MinPlayersPerTeam
 * @property int $MaxPlayersPerTeam
 * @property int $MinLvl
 * @property int $MaxLvl
 * @property int $AllianceStartLoc
 * @property float $AllianceStartO
 * @property int $HordeStartLoc
 * @property float $HordeStartO
 * @property float $StartMaxDist
 * @property int $Weight
 * @property string $ScriptName
 * @property string $Comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class BattlegroundTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'battleground_template';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'MinPlayersPerTeam' => 'int',
		'MaxPlayersPerTeam' => 'int',
		'MinLvl' => 'int',
		'MaxLvl' => 'int',
		'AllianceStartLoc' => 'int',
		'AllianceStartO' => 'float',
		'HordeStartLoc' => 'int',
		'HordeStartO' => 'float',
		'StartMaxDist' => 'float',
		'Weight' => 'int'
	];

	protected $fillable = [
		'MinPlayersPerTeam',
		'MaxPlayersPerTeam',
		'MinLvl',
		'MaxLvl',
		'AllianceStartLoc',
		'AllianceStartO',
		'HordeStartLoc',
		'HordeStartO',
		'StartMaxDist',
		'Weight',
		'ScriptName',
		'Comment'
	];
}
