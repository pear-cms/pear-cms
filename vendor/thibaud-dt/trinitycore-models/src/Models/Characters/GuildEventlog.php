<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildEventlog
 * 
 * @property int $guildid
 * @property int $LogGuid
 * @property int $EventType
 * @property int $PlayerGuid1
 * @property int $PlayerGuid2
 * @property int $NewRank
 * @property int $TimeStamp
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GuildEventlog extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_eventlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'LogGuid' => 'int',
		'EventType' => 'int',
		'PlayerGuid1' => 'int',
		'PlayerGuid2' => 'int',
		'NewRank' => 'int',
		'TimeStamp' => 'int'
	];

	protected $fillable = [
		'EventType',
		'PlayerGuid1',
		'PlayerGuid2',
		'NewRank',
		'TimeStamp'
	];
}
