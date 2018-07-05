<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildMemberWithdraw
 * 
 * @property int $guid
 * @property int $tab0
 * @property int $tab1
 * @property int $tab2
 * @property int $tab3
 * @property int $tab4
 * @property int $tab5
 * @property int $money
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GuildMemberWithdraw extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_member_withdraw';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'tab0' => 'int',
		'tab1' => 'int',
		'tab2' => 'int',
		'tab3' => 'int',
		'tab4' => 'int',
		'tab5' => 'int',
		'money' => 'int'
	];

	protected $fillable = [
		'tab0',
		'tab1',
		'tab2',
		'tab3',
		'tab4',
		'tab5',
		'money'
	];
}
