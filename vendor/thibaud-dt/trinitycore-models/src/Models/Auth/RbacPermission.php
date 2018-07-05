<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RbacPermission
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $rbac_account_permissions
 * @property \Illuminate\Database\Eloquent\Collection $rbac_default_permissions
 * @property \Illuminate\Database\Eloquent\Collection $rbac_linked_permissions
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class RbacPermission extends Eloquent
{
	protected $connection = 'auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'name'
	];

	public function rbac_account_permissions()
	{
		return $this->hasMany(\ThibaudDT\TrinityCoreModels\Auth\RbacAccountPermission::class, 'permissionId');
	}

	public function rbac_default_permissions()
	{
		return $this->hasMany(\ThibaudDT\TrinityCoreModels\Auth\RbacDefaultPermission::class, 'permissionId');
	}

	public function rbac_linked_permissions()
	{
		return $this->hasMany(\ThibaudDT\TrinityCoreModels\Auth\RbacLinkedPermission::class, 'linkedId');
	}
}
