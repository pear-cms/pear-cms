<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesQuest
 * 
 * @property int $Id
 * @property string $Title_loc1
 * @property string $Title_loc2
 * @property string $Title_loc3
 * @property string $Title_loc4
 * @property string $Title_loc5
 * @property string $Title_loc6
 * @property string $Title_loc7
 * @property string $Title_loc8
 * @property string $Details_loc1
 * @property string $Details_loc2
 * @property string $Details_loc3
 * @property string $Details_loc4
 * @property string $Details_loc5
 * @property string $Details_loc6
 * @property string $Details_loc7
 * @property string $Details_loc8
 * @property string $Objectives_loc1
 * @property string $Objectives_loc2
 * @property string $Objectives_loc3
 * @property string $Objectives_loc4
 * @property string $Objectives_loc5
 * @property string $Objectives_loc6
 * @property string $Objectives_loc7
 * @property string $Objectives_loc8
 * @property string $OfferRewardText_loc1
 * @property string $OfferRewardText_loc2
 * @property string $OfferRewardText_loc3
 * @property string $OfferRewardText_loc4
 * @property string $OfferRewardText_loc5
 * @property string $OfferRewardText_loc6
 * @property string $OfferRewardText_loc7
 * @property string $OfferRewardText_loc8
 * @property string $RequestItemsText_loc1
 * @property string $RequestItemsText_loc2
 * @property string $RequestItemsText_loc3
 * @property string $RequestItemsText_loc4
 * @property string $RequestItemsText_loc5
 * @property string $RequestItemsText_loc6
 * @property string $RequestItemsText_loc7
 * @property string $RequestItemsText_loc8
 * @property string $EndText_loc1
 * @property string $EndText_loc2
 * @property string $EndText_loc3
 * @property string $EndText_loc4
 * @property string $EndText_loc5
 * @property string $EndText_loc6
 * @property string $EndText_loc7
 * @property string $EndText_loc8
 * @property string $CompletedText_loc1
 * @property string $CompletedText_loc2
 * @property string $CompletedText_loc3
 * @property string $CompletedText_loc4
 * @property string $CompletedText_loc5
 * @property string $CompletedText_loc6
 * @property string $CompletedText_loc7
 * @property string $CompletedText_loc8
 * @property string $ObjectiveText1_loc1
 * @property string $ObjectiveText1_loc2
 * @property string $ObjectiveText1_loc3
 * @property string $ObjectiveText1_loc4
 * @property string $ObjectiveText1_loc5
 * @property string $ObjectiveText1_loc6
 * @property string $ObjectiveText1_loc7
 * @property string $ObjectiveText1_loc8
 * @property string $ObjectiveText2_loc1
 * @property string $ObjectiveText2_loc2
 * @property string $ObjectiveText2_loc3
 * @property string $ObjectiveText2_loc4
 * @property string $ObjectiveText2_loc5
 * @property string $ObjectiveText2_loc6
 * @property string $ObjectiveText2_loc7
 * @property string $ObjectiveText2_loc8
 * @property string $ObjectiveText3_loc1
 * @property string $ObjectiveText3_loc2
 * @property string $ObjectiveText3_loc3
 * @property string $ObjectiveText3_loc4
 * @property string $ObjectiveText3_loc5
 * @property string $ObjectiveText3_loc6
 * @property string $ObjectiveText3_loc7
 * @property string $ObjectiveText3_loc8
 * @property string $ObjectiveText4_loc1
 * @property string $ObjectiveText4_loc2
 * @property string $ObjectiveText4_loc3
 * @property string $ObjectiveText4_loc4
 * @property string $ObjectiveText4_loc5
 * @property string $ObjectiveText4_loc6
 * @property string $ObjectiveText4_loc7
 * @property string $ObjectiveText4_loc8
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesQuest extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_quest';
	protected $primaryKey = 'Id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'Title_loc1',
		'Title_loc2',
		'Title_loc3',
		'Title_loc4',
		'Title_loc5',
		'Title_loc6',
		'Title_loc7',
		'Title_loc8',
		'Details_loc1',
		'Details_loc2',
		'Details_loc3',
		'Details_loc4',
		'Details_loc5',
		'Details_loc6',
		'Details_loc7',
		'Details_loc8',
		'Objectives_loc1',
		'Objectives_loc2',
		'Objectives_loc3',
		'Objectives_loc4',
		'Objectives_loc5',
		'Objectives_loc6',
		'Objectives_loc7',
		'Objectives_loc8',
		'OfferRewardText_loc1',
		'OfferRewardText_loc2',
		'OfferRewardText_loc3',
		'OfferRewardText_loc4',
		'OfferRewardText_loc5',
		'OfferRewardText_loc6',
		'OfferRewardText_loc7',
		'OfferRewardText_loc8',
		'RequestItemsText_loc1',
		'RequestItemsText_loc2',
		'RequestItemsText_loc3',
		'RequestItemsText_loc4',
		'RequestItemsText_loc5',
		'RequestItemsText_loc6',
		'RequestItemsText_loc7',
		'RequestItemsText_loc8',
		'EndText_loc1',
		'EndText_loc2',
		'EndText_loc3',
		'EndText_loc4',
		'EndText_loc5',
		'EndText_loc6',
		'EndText_loc7',
		'EndText_loc8',
		'CompletedText_loc1',
		'CompletedText_loc2',
		'CompletedText_loc3',
		'CompletedText_loc4',
		'CompletedText_loc5',
		'CompletedText_loc6',
		'CompletedText_loc7',
		'CompletedText_loc8',
		'ObjectiveText1_loc1',
		'ObjectiveText1_loc2',
		'ObjectiveText1_loc3',
		'ObjectiveText1_loc4',
		'ObjectiveText1_loc5',
		'ObjectiveText1_loc6',
		'ObjectiveText1_loc7',
		'ObjectiveText1_loc8',
		'ObjectiveText2_loc1',
		'ObjectiveText2_loc2',
		'ObjectiveText2_loc3',
		'ObjectiveText2_loc4',
		'ObjectiveText2_loc5',
		'ObjectiveText2_loc6',
		'ObjectiveText2_loc7',
		'ObjectiveText2_loc8',
		'ObjectiveText3_loc1',
		'ObjectiveText3_loc2',
		'ObjectiveText3_loc3',
		'ObjectiveText3_loc4',
		'ObjectiveText3_loc5',
		'ObjectiveText3_loc6',
		'ObjectiveText3_loc7',
		'ObjectiveText3_loc8',
		'ObjectiveText4_loc1',
		'ObjectiveText4_loc2',
		'ObjectiveText4_loc3',
		'ObjectiveText4_loc4',
		'ObjectiveText4_loc5',
		'ObjectiveText4_loc6',
		'ObjectiveText4_loc7',
		'ObjectiveText4_loc8',
		'VerifiedBuild'
	];
}
