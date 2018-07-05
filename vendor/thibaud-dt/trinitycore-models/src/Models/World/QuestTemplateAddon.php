<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestTemplateAddon
 * 
 * @property int $ID
 * @property int $MaxLevel
 * @property int $AllowableClasses
 * @property int $SourceSpellID
 * @property int $PrevQuestID
 * @property int $NextQuestID
 * @property int $ExclusiveGroup
 * @property int $RewardMailTemplateID
 * @property int $RewardMailDelay
 * @property int $RequiredSkillID
 * @property int $RequiredSkillPoints
 * @property int $RequiredMinRepFaction
 * @property int $RequiredMaxRepFaction
 * @property int $RequiredMinRepValue
 * @property int $RequiredMaxRepValue
 * @property int $ProvidedItemCount
 * @property int $SpecialFlags
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class QuestTemplateAddon extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'quest_template_addon';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'MaxLevel' => 'int',
		'AllowableClasses' => 'int',
		'SourceSpellID' => 'int',
		'PrevQuestID' => 'int',
		'NextQuestID' => 'int',
		'ExclusiveGroup' => 'int',
		'RewardMailTemplateID' => 'int',
		'RewardMailDelay' => 'int',
		'RequiredSkillID' => 'int',
		'RequiredSkillPoints' => 'int',
		'RequiredMinRepFaction' => 'int',
		'RequiredMaxRepFaction' => 'int',
		'RequiredMinRepValue' => 'int',
		'RequiredMaxRepValue' => 'int',
		'ProvidedItemCount' => 'int',
		'SpecialFlags' => 'int'
	];

	protected $fillable = [
		'MaxLevel',
		'AllowableClasses',
		'SourceSpellID',
		'PrevQuestID',
		'NextQuestID',
		'ExclusiveGroup',
		'RewardMailTemplateID',
		'RewardMailDelay',
		'RequiredSkillID',
		'RequiredSkillPoints',
		'RequiredMinRepFaction',
		'RequiredMaxRepFaction',
		'RequiredMinRepValue',
		'RequiredMaxRepValue',
		'ProvidedItemCount',
		'SpecialFlags'
	];
}
