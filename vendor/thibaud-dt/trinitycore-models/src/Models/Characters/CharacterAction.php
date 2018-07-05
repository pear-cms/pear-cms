<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterAction
 * 
 * @property int $guid
 * @property int $spec
 * @property int $button
 * @property int $action
 * @property int $type
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterAction extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_action';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'spec' => 'int',
		'button' => 'int',
		'action' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'action',
		'type'
	];
}
