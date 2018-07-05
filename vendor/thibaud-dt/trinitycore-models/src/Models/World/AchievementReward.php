<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AchievementReward
 * 
 * @property int $entry
 * @property int $title_A
 * @property int $title_H
 * @property int $item
 * @property int $sender
 * @property string $subject
 * @property string $text
 * @property int $mailTemplate
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class AchievementReward extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'achievement_reward';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'title_A' => 'int',
		'title_H' => 'int',
		'item' => 'int',
		'sender' => 'int',
		'mailTemplate' => 'int'
	];

	protected $fillable = [
		'title_A',
		'title_H',
		'item',
		'sender',
		'subject',
		'text',
		'mailTemplate'
	];
}
