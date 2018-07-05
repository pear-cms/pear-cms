<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayercreateinfoItem
 * 
 * @property int $race
 * @property int $class
 * @property int $itemid
 * @property int $amount
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayercreateinfoItem extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'playercreateinfo_item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'race' => 'int',
		'class' => 'int',
		'itemid' => 'int',
		'amount' => 'int'
	];

	protected $fillable = [
		'amount'
	];
}
