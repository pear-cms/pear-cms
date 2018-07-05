<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemSoulboundTradeDatum
 * 
 * @property int $itemGuid
 * @property string $allowedPlayers
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ItemSoulboundTradeDatum extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'itemGuid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'itemGuid' => 'int'
	];

	protected $fillable = [
		'allowedPlayers'
	];
}
