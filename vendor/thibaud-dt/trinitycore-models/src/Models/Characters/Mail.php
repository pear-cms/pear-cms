<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mail
 * 
 * @property int $id
 * @property int $messageType
 * @property int $stationery
 * @property int $mailTemplateId
 * @property int $sender
 * @property int $receiver
 * @property string $subject
 * @property string $body
 * @property int $has_items
 * @property int $expire_time
 * @property int $deliver_time
 * @property int $money
 * @property int $cod
 * @property int $checked
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Mail extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'mail';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'messageType' => 'int',
		'stationery' => 'int',
		'mailTemplateId' => 'int',
		'sender' => 'int',
		'receiver' => 'int',
		'has_items' => 'int',
		'expire_time' => 'int',
		'deliver_time' => 'int',
		'money' => 'int',
		'cod' => 'int',
		'checked' => 'int'
	];

	protected $fillable = [
		'messageType',
		'stationery',
		'mailTemplateId',
		'sender',
		'receiver',
		'subject',
		'body',
		'has_items',
		'expire_time',
		'deliver_time',
		'money',
		'cod',
		'checked'
	];
}
