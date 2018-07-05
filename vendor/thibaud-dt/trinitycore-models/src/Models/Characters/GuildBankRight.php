<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildBankRight
 * 
 * @property int $guildid
 * @property int $TabId
 * @property int $rid
 * @property int $gbright
 * @property int $SlotPerDay
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GuildBankRight extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_bank_right';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'TabId' => 'int',
		'rid' => 'int',
		'gbright' => 'int',
		'SlotPerDay' => 'int'
	];

	protected $fillable = [
		'gbright',
		'SlotPerDay'
	];
}
