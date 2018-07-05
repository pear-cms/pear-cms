<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PvpstatsPlayer
 * 
 * @property int $battleground_id
 * @property int $character_guid
 * @property bool $winner
 * @property int $score_killing_blows
 * @property int $score_deaths
 * @property int $score_honorable_kills
 * @property int $score_bonus_honor
 * @property int $score_damage_done
 * @property int $score_healing_done
 * @property int $attr_1
 * @property int $attr_2
 * @property int $attr_3
 * @property int $attr_4
 * @property int $attr_5
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PvpstatsPlayer extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'battleground_id' => 'int',
		'character_guid' => 'int',
		'winner' => 'bool',
		'score_killing_blows' => 'int',
		'score_deaths' => 'int',
		'score_honorable_kills' => 'int',
		'score_bonus_honor' => 'int',
		'score_damage_done' => 'int',
		'score_healing_done' => 'int',
		'attr_1' => 'int',
		'attr_2' => 'int',
		'attr_3' => 'int',
		'attr_4' => 'int',
		'attr_5' => 'int'
	];

	protected $fillable = [
		'winner',
		'score_killing_blows',
		'score_deaths',
		'score_honorable_kills',
		'score_bonus_honor',
		'score_damage_done',
		'score_healing_done',
		'attr_1',
		'attr_2',
		'attr_3',
		'attr_4',
		'attr_5'
	];
}
