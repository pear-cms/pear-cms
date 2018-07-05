<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestRequestItem
 * 
 * @property int $ID
 * @property int $EmoteOnComplete
 * @property int $EmoteOnIncomplete
 * @property string $CompletionText
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class QuestRequestItem extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'EmoteOnComplete' => 'int',
		'EmoteOnIncomplete' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'EmoteOnComplete',
		'EmoteOnIncomplete',
		'CompletionText',
		'VerifiedBuild'
	];
}
