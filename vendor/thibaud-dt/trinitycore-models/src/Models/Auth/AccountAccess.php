<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountAccess
 * 
 * @property int $id
 * @property int $gmlevel
 * @property int $RealmID
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class AccountAccess extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'account_access';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'gmlevel' => 'int',
		'RealmID' => 'int'
	];

	protected $fillable = [
		'gmlevel'
	];
}
