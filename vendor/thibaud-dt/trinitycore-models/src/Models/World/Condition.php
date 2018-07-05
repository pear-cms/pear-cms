<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Condition
 * 
 * @property int $SourceTypeOrReferenceId
 * @property int $SourceGroup
 * @property int $SourceEntry
 * @property int $SourceId
 * @property int $ElseGroup
 * @property int $ConditionTypeOrReference
 * @property int $ConditionTarget
 * @property int $ConditionValue1
 * @property int $ConditionValue2
 * @property int $ConditionValue3
 * @property int $NegativeCondition
 * @property int $ErrorType
 * @property int $ErrorTextId
 * @property string $ScriptName
 * @property string $Comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Condition extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SourceTypeOrReferenceId' => 'int',
		'SourceGroup' => 'int',
		'SourceEntry' => 'int',
		'SourceId' => 'int',
		'ElseGroup' => 'int',
		'ConditionTypeOrReference' => 'int',
		'ConditionTarget' => 'int',
		'ConditionValue1' => 'int',
		'ConditionValue2' => 'int',
		'ConditionValue3' => 'int',
		'NegativeCondition' => 'int',
		'ErrorType' => 'int',
		'ErrorTextId' => 'int'
	];

	protected $fillable = [
		'NegativeCondition',
		'ErrorType',
		'ErrorTextId',
		'ScriptName',
		'Comment'
	];
}
