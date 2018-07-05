<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameobjectTemplate
 * 
 * @property int $entry
 * @property int $type
 * @property int $displayId
 * @property string $name
 * @property string $IconName
 * @property string $castBarCaption
 * @property string $unk1
 * @property int $faction
 * @property int $flags
 * @property float $size
 * @property int $Data0
 * @property int $Data1
 * @property int $Data2
 * @property int $Data3
 * @property int $Data4
 * @property int $Data5
 * @property int $Data6
 * @property int $Data7
 * @property int $Data8
 * @property int $Data9
 * @property int $Data10
 * @property int $Data11
 * @property int $Data12
 * @property int $Data13
 * @property int $Data14
 * @property int $Data15
 * @property int $Data16
 * @property int $Data17
 * @property int $Data18
 * @property int $Data19
 * @property int $Data20
 * @property int $Data21
 * @property int $Data22
 * @property int $Data23
 * @property string $AIName
 * @property string $ScriptName
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameobjectTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'gameobject_template';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'type' => 'int',
		'displayId' => 'int',
		'faction' => 'int',
		'flags' => 'int',
		'size' => 'float',
		'Data0' => 'int',
		'Data1' => 'int',
		'Data2' => 'int',
		'Data3' => 'int',
		'Data4' => 'int',
		'Data5' => 'int',
		'Data6' => 'int',
		'Data7' => 'int',
		'Data8' => 'int',
		'Data9' => 'int',
		'Data10' => 'int',
		'Data11' => 'int',
		'Data12' => 'int',
		'Data13' => 'int',
		'Data14' => 'int',
		'Data15' => 'int',
		'Data16' => 'int',
		'Data17' => 'int',
		'Data18' => 'int',
		'Data19' => 'int',
		'Data20' => 'int',
		'Data21' => 'int',
		'Data22' => 'int',
		'Data23' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'type',
		'displayId',
		'name',
		'IconName',
		'castBarCaption',
		'unk1',
		'faction',
		'flags',
		'size',
		'Data0',
		'Data1',
		'Data2',
		'Data3',
		'Data4',
		'Data5',
		'Data6',
		'Data7',
		'Data8',
		'Data9',
		'Data10',
		'Data11',
		'Data12',
		'Data13',
		'Data14',
		'Data15',
		'Data16',
		'Data17',
		'Data18',
		'Data19',
		'Data20',
		'Data21',
		'Data22',
		'Data23',
		'AIName',
		'ScriptName',
		'VerifiedBuild'
	];
}
