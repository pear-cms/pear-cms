<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameobjectQuestitem
 * 
 * @property int $GameObjectEntry
 * @property int $Idx
 * @property int $ItemId
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameobjectQuestitem extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'gameobject_questitem';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'GameObjectEntry' => 'int',
		'Idx' => 'int',
		'ItemId' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'ItemId',
		'VerifiedBuild'
	];
}
