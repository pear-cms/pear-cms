<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MailItem
 * 
 * @property int $mail_id
 * @property int $item_guid
 * @property int $receiver
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class MailItem extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'item_guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'mail_id' => 'int',
		'item_guid' => 'int',
		'receiver' => 'int'
	];

	protected $fillable = [
		'mail_id',
		'receiver'
	];
}
