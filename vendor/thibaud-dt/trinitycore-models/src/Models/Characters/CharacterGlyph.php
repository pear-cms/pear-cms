<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterGlyph
 * 
 * @property int $guid
 * @property int $talentGroup
 * @property int $glyph1
 * @property int $glyph2
 * @property int $glyph3
 * @property int $glyph4
 * @property int $glyph5
 * @property int $glyph6
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterGlyph extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'talentGroup' => 'int',
		'glyph1' => 'int',
		'glyph2' => 'int',
		'glyph3' => 'int',
		'glyph4' => 'int',
		'glyph5' => 'int',
		'glyph6' => 'int'
	];

	protected $fillable = [
		'glyph1',
		'glyph2',
		'glyph3',
		'glyph4',
		'glyph5',
		'glyph6'
	];
}
