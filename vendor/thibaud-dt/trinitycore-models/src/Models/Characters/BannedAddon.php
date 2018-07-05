<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BannedAddon
 * 
 * @property int $Id
 * @property string $Name
 * @property string $Version
 * @property \Carbon\Carbon $Timestamp
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class BannedAddon extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $dates = [
		'Timestamp'
	];

	protected $fillable = [
		'Name',
		'Version',
		'Timestamp'
	];
}
