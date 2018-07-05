<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestPoi
 * 
 * @property int $QuestID
 * @property int $id
 * @property int $ObjectiveIndex
 * @property int $MapID
 * @property int $WorldMapAreaId
 * @property int $Floor
 * @property int $Priority
 * @property int $Flags
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class QuestPoi extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'quest_poi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'QuestID' => 'int',
		'id' => 'int',
		'ObjectiveIndex' => 'int',
		'MapID' => 'int',
		'WorldMapAreaId' => 'int',
		'Floor' => 'int',
		'Priority' => 'int',
		'Flags' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'ObjectiveIndex',
		'MapID',
		'WorldMapAreaId',
		'Floor',
		'Priority',
		'Flags',
		'VerifiedBuild'
	];
}
