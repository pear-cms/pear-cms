<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Auctionhouse
 * 
 * @property int $id
 * @property int $houseid
 * @property int $itemguid
 * @property int $itemowner
 * @property int $buyoutprice
 * @property int $time
 * @property int $buyguid
 * @property int $lastbid
 * @property int $startbid
 * @property int $deposit
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Auctionhouse extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'auctionhouse';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'houseid' => 'int',
		'itemguid' => 'int',
		'itemowner' => 'int',
		'buyoutprice' => 'int',
		'time' => 'int',
		'buyguid' => 'int',
		'lastbid' => 'int',
		'startbid' => 'int',
		'deposit' => 'int'
	];

	protected $fillable = [
		'houseid',
		'itemguid',
		'itemowner',
		'buyoutprice',
		'time',
		'buyguid',
		'lastbid',
		'startbid',
		'deposit'
	];
}
