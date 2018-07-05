<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GossipMenuOption
 * 
 * @property int $menu_id
 * @property int $id
 * @property int $option_icon
 * @property string $option_text
 * @property int $OptionBroadcastTextID
 * @property int $option_id
 * @property int $npc_option_npcflag
 * @property int $action_menu_id
 * @property int $action_poi_id
 * @property int $box_coded
 * @property int $box_money
 * @property string $box_text
 * @property int $BoxBroadcastTextID
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GossipMenuOption extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'gossip_menu_option';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'menu_id' => 'int',
		'id' => 'int',
		'option_icon' => 'int',
		'OptionBroadcastTextID' => 'int',
		'option_id' => 'int',
		'npc_option_npcflag' => 'int',
		'action_menu_id' => 'int',
		'action_poi_id' => 'int',
		'box_coded' => 'int',
		'box_money' => 'int',
		'BoxBroadcastTextID' => 'int'
	];

	protected $fillable = [
		'option_icon',
		'option_text',
		'OptionBroadcastTextID',
		'option_id',
		'npc_option_npcflag',
		'action_menu_id',
		'action_poi_id',
		'box_coded',
		'box_money',
		'box_text',
		'BoxBroadcastTextID'
	];
}
