<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class IpBanned
 * 
 * @property string $ip
 * @property int $bandate
 * @property int $unbandate
 * @property string $bannedby
 * @property string $banreason
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class IpBanned extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'ip_banned';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'bandate' => 'int',
		'unbandate' => 'int'
	];

	protected $fillable = [
		'unbandate',
		'bannedby',
		'banreason'
	];
}
