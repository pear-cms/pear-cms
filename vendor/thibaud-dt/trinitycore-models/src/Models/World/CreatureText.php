<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureText
 * 
 * @property int $entry
 * @property int $groupid
 * @property int $id
 * @property string $text
 * @property int $type
 * @property int $language
 * @property float $probability
 * @property int $emote
 * @property int $duration
 * @property int $sound
 * @property int $BroadcastTextId
 * @property int $TextRange
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureText extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_text';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'groupid' => 'int',
		'id' => 'int',
		'type' => 'int',
		'language' => 'int',
		'probability' => 'float',
		'emote' => 'int',
		'duration' => 'int',
		'sound' => 'int',
		'BroadcastTextId' => 'int',
		'TextRange' => 'int'
	];

	protected $fillable = [
		'text',
		'type',
		'language',
		'probability',
		'emote',
		'duration',
		'sound',
		'BroadcastTextId',
		'TextRange',
		'comment'
	];
}
