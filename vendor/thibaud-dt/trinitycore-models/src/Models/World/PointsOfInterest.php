<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PointsOfInterest
 * 
 * @property int $ID
 * @property float $PositionX
 * @property float $PositionY
 * @property int $Icon
 * @property int $Flags
 * @property int $Data
 * @property string $Name
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PointsOfInterest extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'points_of_interest';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'PositionX' => 'float',
		'PositionY' => 'float',
		'Icon' => 'int',
		'Flags' => 'int',
		'Data' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'PositionX',
		'PositionY',
		'Icon',
		'Flags',
		'Data',
		'Name',
		'VerifiedBuild'
	];
}
