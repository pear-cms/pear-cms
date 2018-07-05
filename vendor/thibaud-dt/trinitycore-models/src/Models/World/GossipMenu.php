<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GossipMenu
 * 
 * @property int $entry
 * @property int $text_id
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GossipMenu extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'gossip_menu';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'text_id' => 'int'
	];
}
