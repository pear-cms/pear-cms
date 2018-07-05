<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountTutorial
 * 
 * @property int $accountId
 * @property int $tut0
 * @property int $tut1
 * @property int $tut2
 * @property int $tut3
 * @property int $tut4
 * @property int $tut5
 * @property int $tut6
 * @property int $tut7
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class AccountTutorial extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'account_tutorial';
	protected $primaryKey = 'accountId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'accountId' => 'int',
		'tut0' => 'int',
		'tut1' => 'int',
		'tut2' => 'int',
		'tut3' => 'int',
		'tut4' => 'int',
		'tut5' => 'int',
		'tut6' => 'int',
		'tut7' => 'int'
	];

	protected $fillable = [
		'tut0',
		'tut1',
		'tut2',
		'tut3',
		'tut4',
		'tut5',
		'tut6',
		'tut7'
	];
}
