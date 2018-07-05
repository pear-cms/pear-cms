<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestTemplate
 * 
 * @property int $ID
 * @property int $QuestType
 * @property int $QuestLevel
 * @property int $MinLevel
 * @property int $QuestSortID
 * @property int $QuestInfoID
 * @property int $SuggestedGroupNum
 * @property int $RequiredFactionId1
 * @property int $RequiredFactionId2
 * @property int $RequiredFactionValue1
 * @property int $RequiredFactionValue2
 * @property int $RewardNextQuest
 * @property int $RewardXPDifficulty
 * @property int $RewardMoney
 * @property int $RewardBonusMoney
 * @property int $RewardDisplaySpell
 * @property int $RewardSpell
 * @property int $RewardHonor
 * @property float $RewardKillHonor
 * @property int $StartItem
 * @property int $Flags
 * @property int $RequiredPlayerKills
 * @property int $RewardItem1
 * @property int $RewardAmount1
 * @property int $RewardItem2
 * @property int $RewardAmount2
 * @property int $RewardItem3
 * @property int $RewardAmount3
 * @property int $RewardItem4
 * @property int $RewardAmount4
 * @property int $ItemDrop1
 * @property int $ItemDropQuantity1
 * @property int $ItemDrop2
 * @property int $ItemDropQuantity2
 * @property int $ItemDrop3
 * @property int $ItemDropQuantity3
 * @property int $ItemDrop4
 * @property int $ItemDropQuantity4
 * @property int $RewardChoiceItemID1
 * @property int $RewardChoiceItemQuantity1
 * @property int $RewardChoiceItemID2
 * @property int $RewardChoiceItemQuantity2
 * @property int $RewardChoiceItemID3
 * @property int $RewardChoiceItemQuantity3
 * @property int $RewardChoiceItemID4
 * @property int $RewardChoiceItemQuantity4
 * @property int $RewardChoiceItemID5
 * @property int $RewardChoiceItemQuantity5
 * @property int $RewardChoiceItemID6
 * @property int $RewardChoiceItemQuantity6
 * @property int $POIContinent
 * @property float $POIx
 * @property float $POIy
 * @property int $POIPriority
 * @property int $RewardTitle
 * @property int $RewardTalents
 * @property int $RewardArenaPoints
 * @property int $RewardFactionID1
 * @property int $RewardFactionValue1
 * @property int $RewardFactionOverride1
 * @property int $RewardFactionID2
 * @property int $RewardFactionValue2
 * @property int $RewardFactionOverride2
 * @property int $RewardFactionID3
 * @property int $RewardFactionValue3
 * @property int $RewardFactionOverride3
 * @property int $RewardFactionID4
 * @property int $RewardFactionValue4
 * @property int $RewardFactionOverride4
 * @property int $RewardFactionID5
 * @property int $RewardFactionValue5
 * @property int $RewardFactionOverride5
 * @property int $TimeAllowed
 * @property int $AllowableRaces
 * @property string $LogTitle
 * @property string $LogDescription
 * @property string $QuestDescription
 * @property string $AreaDescription
 * @property string $QuestCompletionLog
 * @property int $RequiredNpcOrGo1
 * @property int $RequiredNpcOrGo2
 * @property int $RequiredNpcOrGo3
 * @property int $RequiredNpcOrGo4
 * @property int $RequiredNpcOrGoCount1
 * @property int $RequiredNpcOrGoCount2
 * @property int $RequiredNpcOrGoCount3
 * @property int $RequiredNpcOrGoCount4
 * @property int $RequiredItemId1
 * @property int $RequiredItemId2
 * @property int $RequiredItemId3
 * @property int $RequiredItemId4
 * @property int $RequiredItemId5
 * @property int $RequiredItemId6
 * @property int $RequiredItemCount1
 * @property int $RequiredItemCount2
 * @property int $RequiredItemCount3
 * @property int $RequiredItemCount4
 * @property int $RequiredItemCount5
 * @property int $RequiredItemCount6
 * @property int $Unknown0
 * @property string $ObjectiveText1
 * @property string $ObjectiveText2
 * @property string $ObjectiveText3
 * @property string $ObjectiveText4
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class QuestTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'quest_template';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'QuestType' => 'int',
		'QuestLevel' => 'int',
		'MinLevel' => 'int',
		'QuestSortID' => 'int',
		'QuestInfoID' => 'int',
		'SuggestedGroupNum' => 'int',
		'RequiredFactionId1' => 'int',
		'RequiredFactionId2' => 'int',
		'RequiredFactionValue1' => 'int',
		'RequiredFactionValue2' => 'int',
		'RewardNextQuest' => 'int',
		'RewardXPDifficulty' => 'int',
		'RewardMoney' => 'int',
		'RewardBonusMoney' => 'int',
		'RewardDisplaySpell' => 'int',
		'RewardSpell' => 'int',
		'RewardHonor' => 'int',
		'RewardKillHonor' => 'float',
		'StartItem' => 'int',
		'Flags' => 'int',
		'RequiredPlayerKills' => 'int',
		'RewardItem1' => 'int',
		'RewardAmount1' => 'int',
		'RewardItem2' => 'int',
		'RewardAmount2' => 'int',
		'RewardItem3' => 'int',
		'RewardAmount3' => 'int',
		'RewardItem4' => 'int',
		'RewardAmount4' => 'int',
		'ItemDrop1' => 'int',
		'ItemDropQuantity1' => 'int',
		'ItemDrop2' => 'int',
		'ItemDropQuantity2' => 'int',
		'ItemDrop3' => 'int',
		'ItemDropQuantity3' => 'int',
		'ItemDrop4' => 'int',
		'ItemDropQuantity4' => 'int',
		'RewardChoiceItemID1' => 'int',
		'RewardChoiceItemQuantity1' => 'int',
		'RewardChoiceItemID2' => 'int',
		'RewardChoiceItemQuantity2' => 'int',
		'RewardChoiceItemID3' => 'int',
		'RewardChoiceItemQuantity3' => 'int',
		'RewardChoiceItemID4' => 'int',
		'RewardChoiceItemQuantity4' => 'int',
		'RewardChoiceItemID5' => 'int',
		'RewardChoiceItemQuantity5' => 'int',
		'RewardChoiceItemID6' => 'int',
		'RewardChoiceItemQuantity6' => 'int',
		'POIContinent' => 'int',
		'POIx' => 'float',
		'POIy' => 'float',
		'POIPriority' => 'int',
		'RewardTitle' => 'int',
		'RewardTalents' => 'int',
		'RewardArenaPoints' => 'int',
		'RewardFactionID1' => 'int',
		'RewardFactionValue1' => 'int',
		'RewardFactionOverride1' => 'int',
		'RewardFactionID2' => 'int',
		'RewardFactionValue2' => 'int',
		'RewardFactionOverride2' => 'int',
		'RewardFactionID3' => 'int',
		'RewardFactionValue3' => 'int',
		'RewardFactionOverride3' => 'int',
		'RewardFactionID4' => 'int',
		'RewardFactionValue4' => 'int',
		'RewardFactionOverride4' => 'int',
		'RewardFactionID5' => 'int',
		'RewardFactionValue5' => 'int',
		'RewardFactionOverride5' => 'int',
		'TimeAllowed' => 'int',
		'AllowableRaces' => 'int',
		'RequiredNpcOrGo1' => 'int',
		'RequiredNpcOrGo2' => 'int',
		'RequiredNpcOrGo3' => 'int',
		'RequiredNpcOrGo4' => 'int',
		'RequiredNpcOrGoCount1' => 'int',
		'RequiredNpcOrGoCount2' => 'int',
		'RequiredNpcOrGoCount3' => 'int',
		'RequiredNpcOrGoCount4' => 'int',
		'RequiredItemId1' => 'int',
		'RequiredItemId2' => 'int',
		'RequiredItemId3' => 'int',
		'RequiredItemId4' => 'int',
		'RequiredItemId5' => 'int',
		'RequiredItemId6' => 'int',
		'RequiredItemCount1' => 'int',
		'RequiredItemCount2' => 'int',
		'RequiredItemCount3' => 'int',
		'RequiredItemCount4' => 'int',
		'RequiredItemCount5' => 'int',
		'RequiredItemCount6' => 'int',
		'Unknown0' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'QuestType',
		'QuestLevel',
		'MinLevel',
		'QuestSortID',
		'QuestInfoID',
		'SuggestedGroupNum',
		'RequiredFactionId1',
		'RequiredFactionId2',
		'RequiredFactionValue1',
		'RequiredFactionValue2',
		'RewardNextQuest',
		'RewardXPDifficulty',
		'RewardMoney',
		'RewardBonusMoney',
		'RewardDisplaySpell',
		'RewardSpell',
		'RewardHonor',
		'RewardKillHonor',
		'StartItem',
		'Flags',
		'RequiredPlayerKills',
		'RewardItem1',
		'RewardAmount1',
		'RewardItem2',
		'RewardAmount2',
		'RewardItem3',
		'RewardAmount3',
		'RewardItem4',
		'RewardAmount4',
		'ItemDrop1',
		'ItemDropQuantity1',
		'ItemDrop2',
		'ItemDropQuantity2',
		'ItemDrop3',
		'ItemDropQuantity3',
		'ItemDrop4',
		'ItemDropQuantity4',
		'RewardChoiceItemID1',
		'RewardChoiceItemQuantity1',
		'RewardChoiceItemID2',
		'RewardChoiceItemQuantity2',
		'RewardChoiceItemID3',
		'RewardChoiceItemQuantity3',
		'RewardChoiceItemID4',
		'RewardChoiceItemQuantity4',
		'RewardChoiceItemID5',
		'RewardChoiceItemQuantity5',
		'RewardChoiceItemID6',
		'RewardChoiceItemQuantity6',
		'POIContinent',
		'POIx',
		'POIy',
		'POIPriority',
		'RewardTitle',
		'RewardTalents',
		'RewardArenaPoints',
		'RewardFactionID1',
		'RewardFactionValue1',
		'RewardFactionOverride1',
		'RewardFactionID2',
		'RewardFactionValue2',
		'RewardFactionOverride2',
		'RewardFactionID3',
		'RewardFactionValue3',
		'RewardFactionOverride3',
		'RewardFactionID4',
		'RewardFactionValue4',
		'RewardFactionOverride4',
		'RewardFactionID5',
		'RewardFactionValue5',
		'RewardFactionOverride5',
		'TimeAllowed',
		'AllowableRaces',
		'LogTitle',
		'LogDescription',
		'QuestDescription',
		'AreaDescription',
		'QuestCompletionLog',
		'RequiredNpcOrGo1',
		'RequiredNpcOrGo2',
		'RequiredNpcOrGo3',
		'RequiredNpcOrGo4',
		'RequiredNpcOrGoCount1',
		'RequiredNpcOrGoCount2',
		'RequiredNpcOrGoCount3',
		'RequiredNpcOrGoCount4',
		'RequiredItemId1',
		'RequiredItemId2',
		'RequiredItemId3',
		'RequiredItemId4',
		'RequiredItemId5',
		'RequiredItemId6',
		'RequiredItemCount1',
		'RequiredItemCount2',
		'RequiredItemCount3',
		'RequiredItemCount4',
		'RequiredItemCount5',
		'RequiredItemCount6',
		'Unknown0',
		'ObjectiveText1',
		'ObjectiveText2',
		'ObjectiveText3',
		'ObjectiveText4',
		'VerifiedBuild'
	];
}
