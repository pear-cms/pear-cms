<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Realmlist
 * 
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $localAddress
 * @property string $localSubnetMask
 * @property int $port
 * @property int $icon
 * @property int $flag
 * @property int $timezone
 * @property int $allowedSecurityLevel
 * @property float $population
 * @property int $gamebuild
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class Realmlist extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'realmlist';
	public $timestamps = false;

	protected $casts = [
		'port' => 'int',
		'icon' => 'int',
		'flag' => 'int',
		'timezone' => 'int',
		'allowedSecurityLevel' => 'int',
		'population' => 'float',
		'gamebuild' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'localAddress',
		'localSubnetMask',
		'port',
		'icon',
		'flag',
		'timezone',
		'allowedSecurityLevel',
		'population',
		'gamebuild'
	];
}
