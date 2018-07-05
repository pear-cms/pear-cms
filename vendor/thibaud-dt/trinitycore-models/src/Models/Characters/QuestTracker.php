<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestTracker
 * 
 * @property int $id
 * @property int $character_guid
 * @property \Carbon\Carbon $quest_accept_time
 * @property \Carbon\Carbon $quest_complete_time
 * @property \Carbon\Carbon $quest_abandon_time
 * @property bool $completed_by_gm
 * @property string $core_hash
 * @property string $core_revision
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class QuestTracker extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'quest_tracker';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'character_guid' => 'int',
		'completed_by_gm' => 'bool'
	];

	protected $dates = [
		'quest_accept_time',
		'quest_complete_time',
		'quest_abandon_time'
	];

	protected $fillable = [
		'id',
		'character_guid',
		'quest_accept_time',
		'quest_complete_time',
		'quest_abandon_time',
		'completed_by_gm',
		'core_hash',
		'core_revision'
	];
}
