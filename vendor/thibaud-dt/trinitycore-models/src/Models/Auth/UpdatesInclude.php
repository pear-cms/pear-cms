<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class UpdatesInclude
 * 
 * @property string $path
 * @property string $state
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class UpdatesInclude extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'updates_include';
	protected $primaryKey = 'path';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'state'
	];
}
