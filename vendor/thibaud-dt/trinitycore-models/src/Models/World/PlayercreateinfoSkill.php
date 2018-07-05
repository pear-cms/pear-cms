<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayercreateinfoSkill
 * 
 * @property int $raceMask
 * @property int $classMask
 * @property int $skill
 * @property int $rank
 * @property string $comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PlayercreateinfoSkill extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'raceMask' => 'int',
		'classMask' => 'int',
		'skill' => 'int',
		'rank' => 'int'
	];

	protected $fillable = [
		'rank',
		'comment'
	];
}
