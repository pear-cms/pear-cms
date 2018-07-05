<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ReputationSpilloverTemplate
 * 
 * @property int $faction
 * @property int $faction1
 * @property float $rate_1
 * @property int $rank_1
 * @property int $faction2
 * @property float $rate_2
 * @property int $rank_2
 * @property int $faction3
 * @property float $rate_3
 * @property int $rank_3
 * @property int $faction4
 * @property float $rate_4
 * @property int $rank_4
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ReputationSpilloverTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'reputation_spillover_template';
	protected $primaryKey = 'faction';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'faction' => 'int',
		'faction1' => 'int',
		'rate_1' => 'float',
		'rank_1' => 'int',
		'faction2' => 'int',
		'rate_2' => 'float',
		'rank_2' => 'int',
		'faction3' => 'int',
		'rate_3' => 'float',
		'rank_3' => 'int',
		'faction4' => 'int',
		'rate_4' => 'float',
		'rank_4' => 'int'
	];

	protected $fillable = [
		'faction1',
		'rate_1',
		'rank_1',
		'faction2',
		'rate_2',
		'rank_2',
		'faction3',
		'rate_3',
		'rank_3',
		'faction4',
		'rate_4',
		'rank_4'
	];
}
