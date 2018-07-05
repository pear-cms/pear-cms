<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesGossipMenuOption
 * 
 * @property int $menu_id
 * @property int $id
 * @property string $option_text_loc1
 * @property string $option_text_loc2
 * @property string $option_text_loc3
 * @property string $option_text_loc4
 * @property string $option_text_loc5
 * @property string $option_text_loc6
 * @property string $option_text_loc7
 * @property string $option_text_loc8
 * @property string $box_text_loc1
 * @property string $box_text_loc2
 * @property string $box_text_loc3
 * @property string $box_text_loc4
 * @property string $box_text_loc5
 * @property string $box_text_loc6
 * @property string $box_text_loc7
 * @property string $box_text_loc8
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesGossipMenuOption extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_gossip_menu_option';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'menu_id' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'option_text_loc1',
		'option_text_loc2',
		'option_text_loc3',
		'option_text_loc4',
		'option_text_loc5',
		'option_text_loc6',
		'option_text_loc7',
		'option_text_loc8',
		'box_text_loc1',
		'box_text_loc2',
		'box_text_loc3',
		'box_text_loc4',
		'box_text_loc5',
		'box_text_loc6',
		'box_text_loc7',
		'box_text_loc8'
	];
}
