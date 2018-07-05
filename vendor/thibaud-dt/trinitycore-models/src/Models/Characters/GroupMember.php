<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GroupMember
 * 
 * @property int $guid
 * @property int $memberGuid
 * @property int $memberFlags
 * @property int $subgroup
 * @property int $roles
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GroupMember extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'group_member';
	protected $primaryKey = 'memberGuid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'memberGuid' => 'int',
		'memberFlags' => 'int',
		'subgroup' => 'int',
		'roles' => 'int'
	];

	protected $fillable = [
		'guid',
		'memberFlags',
		'subgroup',
		'roles'
	];
}
