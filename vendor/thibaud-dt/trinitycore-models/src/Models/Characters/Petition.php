<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Petition
 * 
 * @property int $ownerguid
 * @property int $petitionguid
 * @property string $name
 * @property int $type
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Petition extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'petition';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ownerguid' => 'int',
		'petitionguid' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'petitionguid',
		'name'
	];
}
