<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Ip2nation
 * 
 * @property int $ip
 * @property string $country
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class Ip2nation extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'ip2nation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ip' => 'int'
	];

	protected $fillable = [
		'ip',
		'country'
	];
}
