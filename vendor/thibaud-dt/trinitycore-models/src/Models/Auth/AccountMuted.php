<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountMuted
 * 
 * @property int $guid
 * @property int $mutedate
 * @property int $mutetime
 * @property string $mutedby
 * @property string $mutereason
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class AccountMuted extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'account_muted';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'mutedate' => 'int',
		'mutetime' => 'int'
	];

	protected $fillable = [
		'mutetime',
		'mutedby',
		'mutereason'
	];
}
