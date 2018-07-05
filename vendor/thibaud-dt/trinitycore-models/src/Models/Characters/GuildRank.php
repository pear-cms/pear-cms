<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildRank
 * 
 * @property int $guildid
 * @property int $rid
 * @property string $rname
 * @property int $rights
 * @property int $BankMoneyPerDay
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GuildRank extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_rank';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'rid' => 'int',
		'rights' => 'int',
		'BankMoneyPerDay' => 'int'
	];

	protected $fillable = [
		'rname',
		'rights',
		'BankMoneyPerDay'
	];
}
