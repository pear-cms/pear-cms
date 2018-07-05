<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class MailLevelReward
 * 
 * @property int $level
 * @property int $raceMask
 * @property int $mailTemplateId
 * @property int $senderEntry
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class MailLevelReward extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'mail_level_reward';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'level' => 'int',
		'raceMask' => 'int',
		'mailTemplateId' => 'int',
		'senderEntry' => 'int'
	];

	protected $fillable = [
		'mailTemplateId',
		'senderEntry'
	];
}
