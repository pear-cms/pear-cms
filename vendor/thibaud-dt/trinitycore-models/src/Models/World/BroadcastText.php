<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class BroadcastText
 * 
 * @property int $ID
 * @property int $Language
 * @property string $MaleText
 * @property string $FemaleText
 * @property int $EmoteID0
 * @property int $EmoteID1
 * @property int $EmoteID2
 * @property int $EmoteDelay0
 * @property int $EmoteDelay1
 * @property int $EmoteDelay2
 * @property int $SoundId
 * @property int $Unk1
 * @property int $Unk2
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class BroadcastText extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'broadcast_text';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'Language' => 'int',
		'EmoteID0' => 'int',
		'EmoteID1' => 'int',
		'EmoteID2' => 'int',
		'EmoteDelay0' => 'int',
		'EmoteDelay1' => 'int',
		'EmoteDelay2' => 'int',
		'SoundId' => 'int',
		'Unk1' => 'int',
		'Unk2' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'Language',
		'MaleText',
		'FemaleText',
		'EmoteID0',
		'EmoteID1',
		'EmoteID2',
		'EmoteDelay0',
		'EmoteDelay1',
		'EmoteDelay2',
		'SoundId',
		'Unk1',
		'Unk2',
		'VerifiedBuild'
	];
}
