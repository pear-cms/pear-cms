<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildBankItem
 * 
 * @property int $guildid
 * @property int $TabId
 * @property int $SlotId
 * @property int $item_guid
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GuildBankItem extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_bank_item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'TabId' => 'int',
		'SlotId' => 'int',
		'item_guid' => 'int'
	];

	protected $fillable = [
		'item_guid'
	];
}
