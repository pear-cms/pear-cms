<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayercreateinfoAction
 * 
 * @property int $race
 * @property int $class
 * @property int $button
 * @property int $action
 * @property int $type
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayercreateinfoAction extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'playercreateinfo_action';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'race' => 'int',
		'class' => 'int',
		'button' => 'int',
		'action' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'action',
		'type'
	];
}
