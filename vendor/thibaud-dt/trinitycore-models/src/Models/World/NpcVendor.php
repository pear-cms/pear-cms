<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class NpcVendor
 * 
 * @property int $entry
 * @property int $slot
 * @property int $item
 * @property int $maxcount
 * @property int $incrtime
 * @property int $ExtendedCost
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class NpcVendor extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'npc_vendor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'slot' => 'int',
		'item' => 'int',
		'maxcount' => 'int',
		'incrtime' => 'int',
		'ExtendedCost' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'slot',
		'maxcount',
		'incrtime',
		'VerifiedBuild'
	];
}
