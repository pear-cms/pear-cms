<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterEquipmentset
 * 
 * @property int $guid
 * @property int $setguid
 * @property int $setindex
 * @property string $name
 * @property string $iconname
 * @property int $ignore_mask
 * @property int $item0
 * @property int $item1
 * @property int $item2
 * @property int $item3
 * @property int $item4
 * @property int $item5
 * @property int $item6
 * @property int $item7
 * @property int $item8
 * @property int $item9
 * @property int $item10
 * @property int $item11
 * @property int $item12
 * @property int $item13
 * @property int $item14
 * @property int $item15
 * @property int $item16
 * @property int $item17
 * @property int $item18
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CharacterEquipmentset extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'setguid';
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'setindex' => 'int',
		'ignore_mask' => 'int',
		'item0' => 'int',
		'item1' => 'int',
		'item2' => 'int',
		'item3' => 'int',
		'item4' => 'int',
		'item5' => 'int',
		'item6' => 'int',
		'item7' => 'int',
		'item8' => 'int',
		'item9' => 'int',
		'item10' => 'int',
		'item11' => 'int',
		'item12' => 'int',
		'item13' => 'int',
		'item14' => 'int',
		'item15' => 'int',
		'item16' => 'int',
		'item17' => 'int',
		'item18' => 'int'
	];

	protected $fillable = [
		'guid',
		'setindex',
		'name',
		'iconname',
		'ignore_mask',
		'item0',
		'item1',
		'item2',
		'item3',
		'item4',
		'item5',
		'item6',
		'item7',
		'item8',
		'item9',
		'item10',
		'item11',
		'item12',
		'item13',
		'item14',
		'item15',
		'item16',
		'item17',
		'item18'
	];
}
