<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesBroadcastText
 * 
 * @property int $ID
 * @property string $MaleText_loc1
 * @property string $MaleText_loc2
 * @property string $MaleText_loc3
 * @property string $MaleText_loc4
 * @property string $MaleText_loc5
 * @property string $MaleText_loc6
 * @property string $MaleText_loc7
 * @property string $MaleText_loc8
 * @property string $FemaleText_loc1
 * @property string $FemaleText_loc2
 * @property string $FemaleText_loc3
 * @property string $FemaleText_loc4
 * @property string $FemaleText_loc5
 * @property string $FemaleText_loc6
 * @property string $FemaleText_loc7
 * @property string $FemaleText_loc8
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesBroadcastText extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_broadcast_text';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'MaleText_loc1',
		'MaleText_loc2',
		'MaleText_loc3',
		'MaleText_loc4',
		'MaleText_loc5',
		'MaleText_loc6',
		'MaleText_loc7',
		'MaleText_loc8',
		'FemaleText_loc1',
		'FemaleText_loc2',
		'FemaleText_loc3',
		'FemaleText_loc4',
		'FemaleText_loc5',
		'FemaleText_loc6',
		'FemaleText_loc7',
		'FemaleText_loc8',
		'VerifiedBuild'
	];
}
