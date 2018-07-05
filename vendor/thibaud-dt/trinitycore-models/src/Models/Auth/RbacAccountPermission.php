<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RbacAccountPermission
 * 
 * @property int $accountId
 * @property int $permissionId
 * @property bool $granted
 * @property int $realmId
 * 
 * @property \ThibaudDT\TrinityCoreModels\Auth\Account $account
 * @property \ThibaudDT\TrinityCoreModels\Auth\RbacPermission $rbac_permission
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class RbacAccountPermission extends Eloquent
{
	protected $connection = 'auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'accountId' => 'int',
		'permissionId' => 'int',
		'granted' => 'bool',
		'realmId' => 'int'
	];

	protected $fillable = [
		'granted'
	];

	public function account()
	{
		return $this->belongsTo(\ThibaudDT\TrinityCoreModels\Auth\Account::class, 'accountId');
	}

	public function rbac_permission()
	{
		return $this->belongsTo(\ThibaudDT\TrinityCoreModels\Auth\RbacPermission::class, 'permissionId');
	}
}
