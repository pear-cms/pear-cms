<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesPageText
 * 
 * @property int $entry
 * @property string $Text_loc1
 * @property string $Text_loc2
 * @property string $Text_loc3
 * @property string $Text_loc4
 * @property string $Text_loc5
 * @property string $Text_loc6
 * @property string $Text_loc7
 * @property string $Text_loc8
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesPageText extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_page_text';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int'
	];

	protected $fillable = [
		'Text_loc1',
		'Text_loc2',
		'Text_loc3',
		'Text_loc4',
		'Text_loc5',
		'Text_loc6',
		'Text_loc7',
		'Text_loc8'
	];
}
