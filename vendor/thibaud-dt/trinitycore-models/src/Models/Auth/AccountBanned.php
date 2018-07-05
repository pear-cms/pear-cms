<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountBanned
 * 
 * @property int $id
 * @property int $bandate
 * @property int $unbandate
 * @property string $bannedby
 * @property string $banreason
 * @property int $active
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class AccountBanned extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'account_banned';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'bandate' => 'int',
		'unbandate' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'unbandate',
		'bannedby',
		'banreason',
		'active'
	];
}
