<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RbacLinkedPermission
 * 
 * @property int $id
 * @property int $linkedId
 * 
 * @property \ThibaudDT\TrinityCoreModels\Auth\RbacPermission $rbac_permission
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class RbacLinkedPermission extends Eloquent
{
	protected $connection = 'auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'linkedId' => 'int'
	];

	public function rbac_permission()
	{
		return $this->belongsTo(\ThibaudDT\TrinityCoreModels\Auth\RbacPermission::class, 'linkedId');
	}
}
