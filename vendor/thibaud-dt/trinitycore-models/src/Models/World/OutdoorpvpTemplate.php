<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class OutdoorpvpTemplate
 * 
 * @property int $TypeId
 * @property string $ScriptName
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class OutdoorpvpTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'outdoorpvp_template';
	protected $primaryKey = 'TypeId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TypeId' => 'int'
	];

	protected $fillable = [
		'ScriptName',
		'comment'
	];
}
