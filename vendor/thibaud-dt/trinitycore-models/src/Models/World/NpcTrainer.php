<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class NpcTrainer
 * 
 * @property int $ID
 * @property int $SpellID
 * @property int $MoneyCost
 * @property int $ReqSkillLine
 * @property int $ReqSkillRank
 * @property int $ReqLevel
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class NpcTrainer extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'npc_trainer';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'SpellID' => 'int',
		'MoneyCost' => 'int',
		'ReqSkillLine' => 'int',
		'ReqSkillRank' => 'int',
		'ReqLevel' => 'int'
	];

	protected $fillable = [
		'MoneyCost',
		'ReqSkillLine',
		'ReqSkillRank',
		'ReqLevel'
	];
}
