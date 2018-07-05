<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureTemplateAddon
 * 
 * @property int $entry
 * @property int $path_id
 * @property int $mount
 * @property int $bytes1
 * @property int $bytes2
 * @property int $emote
 * @property string $auras
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureTemplateAddon extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_template_addon';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'path_id' => 'int',
		'mount' => 'int',
		'bytes1' => 'int',
		'bytes2' => 'int',
		'emote' => 'int'
	];

	protected $fillable = [
		'path_id',
		'mount',
		'bytes1',
		'bytes2',
		'emote',
		'auras'
	];
}
