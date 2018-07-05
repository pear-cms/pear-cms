<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestPoiPoint
 * 
 * @property int $QuestID
 * @property int $Idx1
 * @property int $Idx2
 * @property int $X
 * @property int $Y
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class QuestPoiPoint extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'QuestID' => 'int',
		'Idx1' => 'int',
		'Idx2' => 'int',
		'X' => 'int',
		'Y' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'X',
		'Y',
		'VerifiedBuild'
	];
}
