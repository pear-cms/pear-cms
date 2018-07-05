<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellDbc
 * 
 * @property int $Id
 * @property int $Dispel
 * @property int $Mechanic
 * @property int $Attributes
 * @property int $AttributesEx
 * @property int $AttributesEx2
 * @property int $AttributesEx3
 * @property int $AttributesEx4
 * @property int $AttributesEx5
 * @property int $AttributesEx6
 * @property int $AttributesEx7
 * @property int $Stances
 * @property int $StancesNot
 * @property int $Targets
 * @property int $CastingTimeIndex
 * @property int $AuraInterruptFlags
 * @property int $ProcFlags
 * @property int $ProcChance
 * @property int $ProcCharges
 * @property int $MaxLevel
 * @property int $BaseLevel
 * @property int $SpellLevel
 * @property int $DurationIndex
 * @property int $RangeIndex
 * @property int $StackAmount
 * @property int $EquippedItemClass
 * @property int $EquippedItemSubClassMask
 * @property int $EquippedItemInventoryTypeMask
 * @property int $Effect1
 * @property int $Effect2
 * @property int $Effect3
 * @property int $EffectDieSides1
 * @property int $EffectDieSides2
 * @property int $EffectDieSides3
 * @property float $EffectRealPointsPerLevel1
 * @property float $EffectRealPointsPerLevel2
 * @property float $EffectRealPointsPerLevel3
 * @property int $EffectBasePoints1
 * @property int $EffectBasePoints2
 * @property int $EffectBasePoints3
 * @property int $EffectMechanic1
 * @property int $EffectMechanic2
 * @property int $EffectMechanic3
 * @property int $EffectImplicitTargetA1
 * @property int $EffectImplicitTargetA2
 * @property int $EffectImplicitTargetA3
 * @property int $EffectImplicitTargetB1
 * @property int $EffectImplicitTargetB2
 * @property int $EffectImplicitTargetB3
 * @property int $EffectRadiusIndex1
 * @property int $EffectRadiusIndex2
 * @property int $EffectRadiusIndex3
 * @property int $EffectApplyAuraName1
 * @property int $EffectApplyAuraName2
 * @property int $EffectApplyAuraName3
 * @property int $EffectAmplitude1
 * @property int $EffectAmplitude2
 * @property int $EffectAmplitude3
 * @property float $EffectMultipleValue1
 * @property float $EffectMultipleValue2
 * @property float $EffectMultipleValue3
 * @property int $EffectItemType1
 * @property int $EffectItemType2
 * @property int $EffectItemType3
 * @property int $EffectMiscValue1
 * @property int $EffectMiscValue2
 * @property int $EffectMiscValue3
 * @property int $EffectMiscValueB1
 * @property int $EffectMiscValueB2
 * @property int $EffectMiscValueB3
 * @property int $EffectTriggerSpell1
 * @property int $EffectTriggerSpell2
 * @property int $EffectTriggerSpell3
 * @property int $EffectSpellClassMaskA1
 * @property int $EffectSpellClassMaskA2
 * @property int $EffectSpellClassMaskA3
 * @property int $EffectSpellClassMaskB1
 * @property int $EffectSpellClassMaskB2
 * @property int $EffectSpellClassMaskB3
 * @property int $EffectSpellClassMaskC1
 * @property int $EffectSpellClassMaskC2
 * @property int $EffectSpellClassMaskC3
 * @property int $MaxTargetLevel
 * @property int $SpellFamilyName
 * @property int $SpellFamilyFlags1
 * @property int $SpellFamilyFlags2
 * @property int $SpellFamilyFlags3
 * @property int $MaxAffectedTargets
 * @property int $DmgClass
 * @property int $PreventionType
 * @property float $DmgMultiplier1
 * @property float $DmgMultiplier2
 * @property float $DmgMultiplier3
 * @property int $AreaGroupId
 * @property int $SchoolMask
 * @property string $Comment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class SpellDbc extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_dbc';
	protected $primaryKey = 'Id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id' => 'int',
		'Dispel' => 'int',
		'Mechanic' => 'int',
		'Attributes' => 'int',
		'AttributesEx' => 'int',
		'AttributesEx2' => 'int',
		'AttributesEx3' => 'int',
		'AttributesEx4' => 'int',
		'AttributesEx5' => 'int',
		'AttributesEx6' => 'int',
		'AttributesEx7' => 'int',
		'Stances' => 'int',
		'StancesNot' => 'int',
		'Targets' => 'int',
		'CastingTimeIndex' => 'int',
		'AuraInterruptFlags' => 'int',
		'ProcFlags' => 'int',
		'ProcChance' => 'int',
		'ProcCharges' => 'int',
		'MaxLevel' => 'int',
		'BaseLevel' => 'int',
		'SpellLevel' => 'int',
		'DurationIndex' => 'int',
		'RangeIndex' => 'int',
		'StackAmount' => 'int',
		'EquippedItemClass' => 'int',
		'EquippedItemSubClassMask' => 'int',
		'EquippedItemInventoryTypeMask' => 'int',
		'Effect1' => 'int',
		'Effect2' => 'int',
		'Effect3' => 'int',
		'EffectDieSides1' => 'int',
		'EffectDieSides2' => 'int',
		'EffectDieSides3' => 'int',
		'EffectRealPointsPerLevel1' => 'float',
		'EffectRealPointsPerLevel2' => 'float',
		'EffectRealPointsPerLevel3' => 'float',
		'EffectBasePoints1' => 'int',
		'EffectBasePoints2' => 'int',
		'EffectBasePoints3' => 'int',
		'EffectMechanic1' => 'int',
		'EffectMechanic2' => 'int',
		'EffectMechanic3' => 'int',
		'EffectImplicitTargetA1' => 'int',
		'EffectImplicitTargetA2' => 'int',
		'EffectImplicitTargetA3' => 'int',
		'EffectImplicitTargetB1' => 'int',
		'EffectImplicitTargetB2' => 'int',
		'EffectImplicitTargetB3' => 'int',
		'EffectRadiusIndex1' => 'int',
		'EffectRadiusIndex2' => 'int',
		'EffectRadiusIndex3' => 'int',
		'EffectApplyAuraName1' => 'int',
		'EffectApplyAuraName2' => 'int',
		'EffectApplyAuraName3' => 'int',
		'EffectAmplitude1' => 'int',
		'EffectAmplitude2' => 'int',
		'EffectAmplitude3' => 'int',
		'EffectMultipleValue1' => 'float',
		'EffectMultipleValue2' => 'float',
		'EffectMultipleValue3' => 'float',
		'EffectItemType1' => 'int',
		'EffectItemType2' => 'int',
		'EffectItemType3' => 'int',
		'EffectMiscValue1' => 'int',
		'EffectMiscValue2' => 'int',
		'EffectMiscValue3' => 'int',
		'EffectMiscValueB1' => 'int',
		'EffectMiscValueB2' => 'int',
		'EffectMiscValueB3' => 'int',
		'EffectTriggerSpell1' => 'int',
		'EffectTriggerSpell2' => 'int',
		'EffectTriggerSpell3' => 'int',
		'EffectSpellClassMaskA1' => 'int',
		'EffectSpellClassMaskA2' => 'int',
		'EffectSpellClassMaskA3' => 'int',
		'EffectSpellClassMaskB1' => 'int',
		'EffectSpellClassMaskB2' => 'int',
		'EffectSpellClassMaskB3' => 'int',
		'EffectSpellClassMaskC1' => 'int',
		'EffectSpellClassMaskC2' => 'int',
		'EffectSpellClassMaskC3' => 'int',
		'MaxTargetLevel' => 'int',
		'SpellFamilyName' => 'int',
		'SpellFamilyFlags1' => 'int',
		'SpellFamilyFlags2' => 'int',
		'SpellFamilyFlags3' => 'int',
		'MaxAffectedTargets' => 'int',
		'DmgClass' => 'int',
		'PreventionType' => 'int',
		'DmgMultiplier1' => 'float',
		'DmgMultiplier2' => 'float',
		'DmgMultiplier3' => 'float',
		'AreaGroupId' => 'int',
		'SchoolMask' => 'int'
	];

	protected $fillable = [
		'Dispel',
		'Mechanic',
		'Attributes',
		'AttributesEx',
		'AttributesEx2',
		'AttributesEx3',
		'AttributesEx4',
		'AttributesEx5',
		'AttributesEx6',
		'AttributesEx7',
		'Stances',
		'StancesNot',
		'Targets',
		'CastingTimeIndex',
		'AuraInterruptFlags',
		'ProcFlags',
		'ProcChance',
		'ProcCharges',
		'MaxLevel',
		'BaseLevel',
		'SpellLevel',
		'DurationIndex',
		'RangeIndex',
		'StackAmount',
		'EquippedItemClass',
		'EquippedItemSubClassMask',
		'EquippedItemInventoryTypeMask',
		'Effect1',
		'Effect2',
		'Effect3',
		'EffectDieSides1',
		'EffectDieSides2',
		'EffectDieSides3',
		'EffectRealPointsPerLevel1',
		'EffectRealPointsPerLevel2',
		'EffectRealPointsPerLevel3',
		'EffectBasePoints1',
		'EffectBasePoints2',
		'EffectBasePoints3',
		'EffectMechanic1',
		'EffectMechanic2',
		'EffectMechanic3',
		'EffectImplicitTargetA1',
		'EffectImplicitTargetA2',
		'EffectImplicitTargetA3',
		'EffectImplicitTargetB1',
		'EffectImplicitTargetB2',
		'EffectImplicitTargetB3',
		'EffectRadiusIndex1',
		'EffectRadiusIndex2',
		'EffectRadiusIndex3',
		'EffectApplyAuraName1',
		'EffectApplyAuraName2',
		'EffectApplyAuraName3',
		'EffectAmplitude1',
		'EffectAmplitude2',
		'EffectAmplitude3',
		'EffectMultipleValue1',
		'EffectMultipleValue2',
		'EffectMultipleValue3',
		'EffectItemType1',
		'EffectItemType2',
		'EffectItemType3',
		'EffectMiscValue1',
		'EffectMiscValue2',
		'EffectMiscValue3',
		'EffectMiscValueB1',
		'EffectMiscValueB2',
		'EffectMiscValueB3',
		'EffectTriggerSpell1',
		'EffectTriggerSpell2',
		'EffectTriggerSpell3',
		'EffectSpellClassMaskA1',
		'EffectSpellClassMaskA2',
		'EffectSpellClassMaskA3',
		'EffectSpellClassMaskB1',
		'EffectSpellClassMaskB2',
		'EffectSpellClassMaskB3',
		'EffectSpellClassMaskC1',
		'EffectSpellClassMaskC2',
		'EffectSpellClassMaskC3',
		'MaxTargetLevel',
		'SpellFamilyName',
		'SpellFamilyFlags1',
		'SpellFamilyFlags2',
		'SpellFamilyFlags3',
		'MaxAffectedTargets',
		'DmgClass',
		'PreventionType',
		'DmgMultiplier1',
		'DmgMultiplier2',
		'DmgMultiplier3',
		'AreaGroupId',
		'SchoolMask',
		'Comment'
	];
}
