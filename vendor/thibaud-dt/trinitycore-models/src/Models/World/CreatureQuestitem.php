<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureQuestitem
 * 
 * @property int $CreatureEntry
 * @property int $Idx
 * @property int $ItemId
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureQuestitem extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_questitem';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CreatureEntry' => 'int',
		'Idx' => 'int',
		'ItemId' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'ItemId',
		'VerifiedBuild'
	];
}
