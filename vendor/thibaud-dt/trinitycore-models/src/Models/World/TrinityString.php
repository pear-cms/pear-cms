<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class TrinityString
 * 
 * @property int $entry
 * @property string $content_default
 * @property string $content_loc1
 * @property string $content_loc2
 * @property string $content_loc3
 * @property string $content_loc4
 * @property string $content_loc5
 * @property string $content_loc6
 * @property string $content_loc7
 * @property string $content_loc8
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class TrinityString extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'trinity_string';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int'
	];

	protected $fillable = [
		'content_default',
		'content_loc1',
		'content_loc2',
		'content_loc3',
		'content_loc4',
		'content_loc5',
		'content_loc6',
		'content_loc7',
		'content_loc8'
	];
}
