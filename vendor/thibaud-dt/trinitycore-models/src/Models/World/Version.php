<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Version
 * 
 * @property string $core_version
 * @property string $core_revision
 * @property string $db_version
 * @property int $cache_id
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Version extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'version';
	protected $primaryKey = 'core_version';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cache_id' => 'int'
	];

	protected $fillable = [
		'core_revision',
		'db_version',
		'cache_id'
	];
}
