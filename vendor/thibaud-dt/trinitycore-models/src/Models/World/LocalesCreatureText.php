<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesCreatureText
 * 
 * @property int $entry
 * @property int $groupid
 * @property int $id
 * @property string $text_loc1
 * @property string $text_loc2
 * @property string $text_loc3
 * @property string $text_loc4
 * @property string $text_loc5
 * @property string $text_loc6
 * @property string $text_loc7
 * @property string $text_loc8
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesCreatureText extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_creature_text';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'groupid' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'text_loc1',
		'text_loc2',
		'text_loc3',
		'text_loc4',
		'text_loc5',
		'text_loc6',
		'text_loc7',
		'text_loc8'
	];
}
