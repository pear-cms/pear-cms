<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestDetail
 * 
 * @property int $ID
 * @property int $Emote1
 * @property int $Emote2
 * @property int $Emote3
 * @property int $Emote4
 * @property int $EmoteDelay1
 * @property int $EmoteDelay2
 * @property int $EmoteDelay3
 * @property int $EmoteDelay4
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class QuestDetail extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'Emote1' => 'int',
		'Emote2' => 'int',
		'Emote3' => 'int',
		'Emote4' => 'int',
		'EmoteDelay1' => 'int',
		'EmoteDelay2' => 'int',
		'EmoteDelay3' => 'int',
		'EmoteDelay4' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'Emote1',
		'Emote2',
		'Emote3',
		'Emote4',
		'EmoteDelay1',
		'EmoteDelay2',
		'EmoteDelay3',
		'EmoteDelay4',
		'VerifiedBuild'
	];
}
