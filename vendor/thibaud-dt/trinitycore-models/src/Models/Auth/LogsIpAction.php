<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LogsIpAction
 * 
 * @property int $id
 * @property int $account_id
 * @property int $character_guid
 * @property int $type
 * @property string $ip
 * @property string $systemnote
 * @property int $unixtime
 * @property \Carbon\Carbon $time
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class LogsIpAction extends Eloquent
{
	protected $connection = 'auth';
	public $timestamps = false;

	protected $casts = [
		'account_id' => 'int',
		'character_guid' => 'int',
		'type' => 'int',
		'unixtime' => 'int'
	];

	protected $dates = [
		'time'
	];

	protected $fillable = [
		'account_id',
		'character_guid',
		'type',
		'ip',
		'systemnote',
		'unixtime',
		'time',
		'comment'
	];
}
