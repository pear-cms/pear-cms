<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GmTicket
 * 
 * @property int $id
 * @property int $type
 * @property int $playerGuid
 * @property string $name
 * @property string $description
 * @property int $createTime
 * @property int $mapId
 * @property float $posX
 * @property float $posY
 * @property float $posZ
 * @property int $lastModifiedTime
 * @property int $closedBy
 * @property int $assignedTo
 * @property string $comment
 * @property string $response
 * @property int $completed
 * @property int $escalated
 * @property int $viewed
 * @property int $needMoreHelp
 * @property int $resolvedBy
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GmTicket extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'gm_ticket';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'playerGuid' => 'int',
		'createTime' => 'int',
		'mapId' => 'int',
		'posX' => 'float',
		'posY' => 'float',
		'posZ' => 'float',
		'lastModifiedTime' => 'int',
		'closedBy' => 'int',
		'assignedTo' => 'int',
		'completed' => 'int',
		'escalated' => 'int',
		'viewed' => 'int',
		'needMoreHelp' => 'int',
		'resolvedBy' => 'int'
	];

	protected $fillable = [
		'type',
		'playerGuid',
		'name',
		'description',
		'createTime',
		'mapId',
		'posX',
		'posY',
		'posZ',
		'lastModifiedTime',
		'closedBy',
		'assignedTo',
		'comment',
		'response',
		'completed',
		'escalated',
		'viewed',
		'needMoreHelp',
		'resolvedBy'
	];
}
