<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Ip2nationCountry
 * 
 * @property string $code
 * @property string $iso_code_2
 * @property string $iso_code_3
 * @property string $iso_country
 * @property string $country
 * @property float $lat
 * @property float $lon
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class Ip2nationCountry extends Eloquent
{
	protected $connection = 'auth';
	protected $primaryKey = 'code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lat' => 'float',
		'lon' => 'float'
	];

	protected $fillable = [
		'iso_code_2',
		'iso_code_3',
		'iso_country',
		'country',
		'lat',
		'lon'
	];
}
