<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class NpcText
 * 
 * @property int $ID
 * @property string $text0_0
 * @property string $text0_1
 * @property int $BroadcastTextID0
 * @property int $lang0
 * @property float $Probability0
 * @property int $em0_0
 * @property int $em0_1
 * @property int $em0_2
 * @property int $em0_3
 * @property int $em0_4
 * @property int $em0_5
 * @property string $text1_0
 * @property string $text1_1
 * @property int $BroadcastTextID1
 * @property int $lang1
 * @property float $Probability1
 * @property int $em1_0
 * @property int $em1_1
 * @property int $em1_2
 * @property int $em1_3
 * @property int $em1_4
 * @property int $em1_5
 * @property string $text2_0
 * @property string $text2_1
 * @property int $BroadcastTextID2
 * @property int $lang2
 * @property float $Probability2
 * @property int $em2_0
 * @property int $em2_1
 * @property int $em2_2
 * @property int $em2_3
 * @property int $em2_4
 * @property int $em2_5
 * @property string $text3_0
 * @property string $text3_1
 * @property int $BroadcastTextID3
 * @property int $lang3
 * @property float $Probability3
 * @property int $em3_0
 * @property int $em3_1
 * @property int $em3_2
 * @property int $em3_3
 * @property int $em3_4
 * @property int $em3_5
 * @property string $text4_0
 * @property string $text4_1
 * @property int $BroadcastTextID4
 * @property int $lang4
 * @property float $Probability4
 * @property int $em4_0
 * @property int $em4_1
 * @property int $em4_2
 * @property int $em4_3
 * @property int $em4_4
 * @property int $em4_5
 * @property string $text5_0
 * @property string $text5_1
 * @property int $BroadcastTextID5
 * @property int $lang5
 * @property float $Probability5
 * @property int $em5_0
 * @property int $em5_1
 * @property int $em5_2
 * @property int $em5_3
 * @property int $em5_4
 * @property int $em5_5
 * @property string $text6_0
 * @property string $text6_1
 * @property int $BroadcastTextID6
 * @property int $lang6
 * @property float $Probability6
 * @property int $em6_0
 * @property int $em6_1
 * @property int $em6_2
 * @property int $em6_3
 * @property int $em6_4
 * @property int $em6_5
 * @property string $text7_0
 * @property string $text7_1
 * @property int $BroadcastTextID7
 * @property int $lang7
 * @property float $Probability7
 * @property int $em7_0
 * @property int $em7_1
 * @property int $em7_2
 * @property int $em7_3
 * @property int $em7_4
 * @property int $em7_5
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class NpcText extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'npc_text';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'BroadcastTextID0' => 'int',
		'lang0' => 'int',
		'Probability0' => 'float',
		'em0_0' => 'int',
		'em0_1' => 'int',
		'em0_2' => 'int',
		'em0_3' => 'int',
		'em0_4' => 'int',
		'em0_5' => 'int',
		'BroadcastTextID1' => 'int',
		'lang1' => 'int',
		'Probability1' => 'float',
		'em1_0' => 'int',
		'em1_1' => 'int',
		'em1_2' => 'int',
		'em1_3' => 'int',
		'em1_4' => 'int',
		'em1_5' => 'int',
		'BroadcastTextID2' => 'int',
		'lang2' => 'int',
		'Probability2' => 'float',
		'em2_0' => 'int',
		'em2_1' => 'int',
		'em2_2' => 'int',
		'em2_3' => 'int',
		'em2_4' => 'int',
		'em2_5' => 'int',
		'BroadcastTextID3' => 'int',
		'lang3' => 'int',
		'Probability3' => 'float',
		'em3_0' => 'int',
		'em3_1' => 'int',
		'em3_2' => 'int',
		'em3_3' => 'int',
		'em3_4' => 'int',
		'em3_5' => 'int',
		'BroadcastTextID4' => 'int',
		'lang4' => 'int',
		'Probability4' => 'float',
		'em4_0' => 'int',
		'em4_1' => 'int',
		'em4_2' => 'int',
		'em4_3' => 'int',
		'em4_4' => 'int',
		'em4_5' => 'int',
		'BroadcastTextID5' => 'int',
		'lang5' => 'int',
		'Probability5' => 'float',
		'em5_0' => 'int',
		'em5_1' => 'int',
		'em5_2' => 'int',
		'em5_3' => 'int',
		'em5_4' => 'int',
		'em5_5' => 'int',
		'BroadcastTextID6' => 'int',
		'lang6' => 'int',
		'Probability6' => 'float',
		'em6_0' => 'int',
		'em6_1' => 'int',
		'em6_2' => 'int',
		'em6_3' => 'int',
		'em6_4' => 'int',
		'em6_5' => 'int',
		'BroadcastTextID7' => 'int',
		'lang7' => 'int',
		'Probability7' => 'float',
		'em7_0' => 'int',
		'em7_1' => 'int',
		'em7_2' => 'int',
		'em7_3' => 'int',
		'em7_4' => 'int',
		'em7_5' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'text0_0',
		'text0_1',
		'BroadcastTextID0',
		'lang0',
		'Probability0',
		'em0_0',
		'em0_1',
		'em0_2',
		'em0_3',
		'em0_4',
		'em0_5',
		'text1_0',
		'text1_1',
		'BroadcastTextID1',
		'lang1',
		'Probability1',
		'em1_0',
		'em1_1',
		'em1_2',
		'em1_3',
		'em1_4',
		'em1_5',
		'text2_0',
		'text2_1',
		'BroadcastTextID2',
		'lang2',
		'Probability2',
		'em2_0',
		'em2_1',
		'em2_2',
		'em2_3',
		'em2_4',
		'em2_5',
		'text3_0',
		'text3_1',
		'BroadcastTextID3',
		'lang3',
		'Probability3',
		'em3_0',
		'em3_1',
		'em3_2',
		'em3_3',
		'em3_4',
		'em3_5',
		'text4_0',
		'text4_1',
		'BroadcastTextID4',
		'lang4',
		'Probability4',
		'em4_0',
		'em4_1',
		'em4_2',
		'em4_3',
		'em4_4',
		'em4_5',
		'text5_0',
		'text5_1',
		'BroadcastTextID5',
		'lang5',
		'Probability5',
		'em5_0',
		'em5_1',
		'em5_2',
		'em5_3',
		'em5_4',
		'em5_5',
		'text6_0',
		'text6_1',
		'BroadcastTextID6',
		'lang6',
		'Probability6',
		'em6_0',
		'em6_1',
		'em6_2',
		'em6_3',
		'em6_4',
		'em6_5',
		'text7_0',
		'text7_1',
		'BroadcastTextID7',
		'lang7',
		'Probability7',
		'em7_0',
		'em7_1',
		'em7_2',
		'em7_3',
		'em7_4',
		'em7_5',
		'VerifiedBuild'
	];
}
