<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemTemplate
 * 
 * @property int $entry
 * @property int $class
 * @property int $subclass
 * @property int $SoundOverrideSubclass
 * @property string $name
 * @property int $displayid
 * @property int $Quality
 * @property int $Flags
 * @property int $FlagsExtra
 * @property int $BuyCount
 * @property int $BuyPrice
 * @property int $SellPrice
 * @property int $InventoryType
 * @property int $AllowableClass
 * @property int $AllowableRace
 * @property int $ItemLevel
 * @property int $RequiredLevel
 * @property int $RequiredSkill
 * @property int $RequiredSkillRank
 * @property int $requiredspell
 * @property int $requiredhonorrank
 * @property int $RequiredCityRank
 * @property int $RequiredReputationFaction
 * @property int $RequiredReputationRank
 * @property int $maxcount
 * @property int $stackable
 * @property int $ContainerSlots
 * @property int $StatsCount
 * @property int $stat_type1
 * @property int $stat_value1
 * @property int $stat_type2
 * @property int $stat_value2
 * @property int $stat_type3
 * @property int $stat_value3
 * @property int $stat_type4
 * @property int $stat_value4
 * @property int $stat_type5
 * @property int $stat_value5
 * @property int $stat_type6
 * @property int $stat_value6
 * @property int $stat_type7
 * @property int $stat_value7
 * @property int $stat_type8
 * @property int $stat_value8
 * @property int $stat_type9
 * @property int $stat_value9
 * @property int $stat_type10
 * @property int $stat_value10
 * @property int $ScalingStatDistribution
 * @property int $ScalingStatValue
 * @property float $dmg_min1
 * @property float $dmg_max1
 * @property int $dmg_type1
 * @property float $dmg_min2
 * @property float $dmg_max2
 * @property int $dmg_type2
 * @property int $armor
 * @property int $holy_res
 * @property int $fire_res
 * @property int $nature_res
 * @property int $frost_res
 * @property int $shadow_res
 * @property int $arcane_res
 * @property int $delay
 * @property int $ammo_type
 * @property float $RangedModRange
 * @property int $spellid_1
 * @property int $spelltrigger_1
 * @property int $spellcharges_1
 * @property float $spellppmRate_1
 * @property int $spellcooldown_1
 * @property int $spellcategory_1
 * @property int $spellcategorycooldown_1
 * @property int $spellid_2
 * @property int $spelltrigger_2
 * @property int $spellcharges_2
 * @property float $spellppmRate_2
 * @property int $spellcooldown_2
 * @property int $spellcategory_2
 * @property int $spellcategorycooldown_2
 * @property int $spellid_3
 * @property int $spelltrigger_3
 * @property int $spellcharges_3
 * @property float $spellppmRate_3
 * @property int $spellcooldown_3
 * @property int $spellcategory_3
 * @property int $spellcategorycooldown_3
 * @property int $spellid_4
 * @property int $spelltrigger_4
 * @property int $spellcharges_4
 * @property float $spellppmRate_4
 * @property int $spellcooldown_4
 * @property int $spellcategory_4
 * @property int $spellcategorycooldown_4
 * @property int $spellid_5
 * @property int $spelltrigger_5
 * @property int $spellcharges_5
 * @property float $spellppmRate_5
 * @property int $spellcooldown_5
 * @property int $spellcategory_5
 * @property int $spellcategorycooldown_5
 * @property int $bonding
 * @property string $description
 * @property int $PageText
 * @property int $LanguageID
 * @property int $PageMaterial
 * @property int $startquest
 * @property int $lockid
 * @property int $Material
 * @property int $sheath
 * @property int $RandomProperty
 * @property int $RandomSuffix
 * @property int $block
 * @property int $itemset
 * @property int $MaxDurability
 * @property int $area
 * @property int $Map
 * @property int $BagFamily
 * @property int $TotemCategory
 * @property int $socketColor_1
 * @property int $socketContent_1
 * @property int $socketColor_2
 * @property int $socketContent_2
 * @property int $socketColor_3
 * @property int $socketContent_3
 * @property int $socketBonus
 * @property int $GemProperties
 * @property int $RequiredDisenchantSkill
 * @property float $ArmorDamageModifier
 * @property int $duration
 * @property int $ItemLimitCategory
 * @property int $HolidayId
 * @property string $ScriptName
 * @property int $DisenchantID
 * @property int $FoodType
 * @property int $minMoneyLoot
 * @property int $maxMoneyLoot
 * @property int $flagsCustom
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class ItemTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'item_template';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'class' => 'int',
		'subclass' => 'int',
		'SoundOverrideSubclass' => 'int',
		'displayid' => 'int',
		'Quality' => 'int',
		'Flags' => 'int',
		'FlagsExtra' => 'int',
		'BuyCount' => 'int',
		'BuyPrice' => 'int',
		'SellPrice' => 'int',
		'InventoryType' => 'int',
		'AllowableClass' => 'int',
		'AllowableRace' => 'int',
		'ItemLevel' => 'int',
		'RequiredLevel' => 'int',
		'RequiredSkill' => 'int',
		'RequiredSkillRank' => 'int',
		'requiredspell' => 'int',
		'requiredhonorrank' => 'int',
		'RequiredCityRank' => 'int',
		'RequiredReputationFaction' => 'int',
		'RequiredReputationRank' => 'int',
		'maxcount' => 'int',
		'stackable' => 'int',
		'ContainerSlots' => 'int',
		'StatsCount' => 'int',
		'stat_type1' => 'int',
		'stat_value1' => 'int',
		'stat_type2' => 'int',
		'stat_value2' => 'int',
		'stat_type3' => 'int',
		'stat_value3' => 'int',
		'stat_type4' => 'int',
		'stat_value4' => 'int',
		'stat_type5' => 'int',
		'stat_value5' => 'int',
		'stat_type6' => 'int',
		'stat_value6' => 'int',
		'stat_type7' => 'int',
		'stat_value7' => 'int',
		'stat_type8' => 'int',
		'stat_value8' => 'int',
		'stat_type9' => 'int',
		'stat_value9' => 'int',
		'stat_type10' => 'int',
		'stat_value10' => 'int',
		'ScalingStatDistribution' => 'int',
		'ScalingStatValue' => 'int',
		'dmg_min1' => 'float',
		'dmg_max1' => 'float',
		'dmg_type1' => 'int',
		'dmg_min2' => 'float',
		'dmg_max2' => 'float',
		'dmg_type2' => 'int',
		'armor' => 'int',
		'holy_res' => 'int',
		'fire_res' => 'int',
		'nature_res' => 'int',
		'frost_res' => 'int',
		'shadow_res' => 'int',
		'arcane_res' => 'int',
		'delay' => 'int',
		'ammo_type' => 'int',
		'RangedModRange' => 'float',
		'spellid_1' => 'int',
		'spelltrigger_1' => 'int',
		'spellcharges_1' => 'int',
		'spellppmRate_1' => 'float',
		'spellcooldown_1' => 'int',
		'spellcategory_1' => 'int',
		'spellcategorycooldown_1' => 'int',
		'spellid_2' => 'int',
		'spelltrigger_2' => 'int',
		'spellcharges_2' => 'int',
		'spellppmRate_2' => 'float',
		'spellcooldown_2' => 'int',
		'spellcategory_2' => 'int',
		'spellcategorycooldown_2' => 'int',
		'spellid_3' => 'int',
		'spelltrigger_3' => 'int',
		'spellcharges_3' => 'int',
		'spellppmRate_3' => 'float',
		'spellcooldown_3' => 'int',
		'spellcategory_3' => 'int',
		'spellcategorycooldown_3' => 'int',
		'spellid_4' => 'int',
		'spelltrigger_4' => 'int',
		'spellcharges_4' => 'int',
		'spellppmRate_4' => 'float',
		'spellcooldown_4' => 'int',
		'spellcategory_4' => 'int',
		'spellcategorycooldown_4' => 'int',
		'spellid_5' => 'int',
		'spelltrigger_5' => 'int',
		'spellcharges_5' => 'int',
		'spellppmRate_5' => 'float',
		'spellcooldown_5' => 'int',
		'spellcategory_5' => 'int',
		'spellcategorycooldown_5' => 'int',
		'bonding' => 'int',
		'PageText' => 'int',
		'LanguageID' => 'int',
		'PageMaterial' => 'int',
		'startquest' => 'int',
		'lockid' => 'int',
		'Material' => 'int',
		'sheath' => 'int',
		'RandomProperty' => 'int',
		'RandomSuffix' => 'int',
		'block' => 'int',
		'itemset' => 'int',
		'MaxDurability' => 'int',
		'area' => 'int',
		'Map' => 'int',
		'BagFamily' => 'int',
		'TotemCategory' => 'int',
		'socketColor_1' => 'int',
		'socketContent_1' => 'int',
		'socketColor_2' => 'int',
		'socketContent_2' => 'int',
		'socketColor_3' => 'int',
		'socketContent_3' => 'int',
		'socketBonus' => 'int',
		'GemProperties' => 'int',
		'RequiredDisenchantSkill' => 'int',
		'ArmorDamageModifier' => 'float',
		'duration' => 'int',
		'ItemLimitCategory' => 'int',
		'HolidayId' => 'int',
		'DisenchantID' => 'int',
		'FoodType' => 'int',
		'minMoneyLoot' => 'int',
		'maxMoneyLoot' => 'int',
		'flagsCustom' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'class',
		'subclass',
		'SoundOverrideSubclass',
		'name',
		'displayid',
		'Quality',
		'Flags',
		'FlagsExtra',
		'BuyCount',
		'BuyPrice',
		'SellPrice',
		'InventoryType',
		'AllowableClass',
		'AllowableRace',
		'ItemLevel',
		'RequiredLevel',
		'RequiredSkill',
		'RequiredSkillRank',
		'requiredspell',
		'requiredhonorrank',
		'RequiredCityRank',
		'RequiredReputationFaction',
		'RequiredReputationRank',
		'maxcount',
		'stackable',
		'ContainerSlots',
		'StatsCount',
		'stat_type1',
		'stat_value1',
		'stat_type2',
		'stat_value2',
		'stat_type3',
		'stat_value3',
		'stat_type4',
		'stat_value4',
		'stat_type5',
		'stat_value5',
		'stat_type6',
		'stat_value6',
		'stat_type7',
		'stat_value7',
		'stat_type8',
		'stat_value8',
		'stat_type9',
		'stat_value9',
		'stat_type10',
		'stat_value10',
		'ScalingStatDistribution',
		'ScalingStatValue',
		'dmg_min1',
		'dmg_max1',
		'dmg_type1',
		'dmg_min2',
		'dmg_max2',
		'dmg_type2',
		'armor',
		'holy_res',
		'fire_res',
		'nature_res',
		'frost_res',
		'shadow_res',
		'arcane_res',
		'delay',
		'ammo_type',
		'RangedModRange',
		'spellid_1',
		'spelltrigger_1',
		'spellcharges_1',
		'spellppmRate_1',
		'spellcooldown_1',
		'spellcategory_1',
		'spellcategorycooldown_1',
		'spellid_2',
		'spelltrigger_2',
		'spellcharges_2',
		'spellppmRate_2',
		'spellcooldown_2',
		'spellcategory_2',
		'spellcategorycooldown_2',
		'spellid_3',
		'spelltrigger_3',
		'spellcharges_3',
		'spellppmRate_3',
		'spellcooldown_3',
		'spellcategory_3',
		'spellcategorycooldown_3',
		'spellid_4',
		'spelltrigger_4',
		'spellcharges_4',
		'spellppmRate_4',
		'spellcooldown_4',
		'spellcategory_4',
		'spellcategorycooldown_4',
		'spellid_5',
		'spelltrigger_5',
		'spellcharges_5',
		'spellppmRate_5',
		'spellcooldown_5',
		'spellcategory_5',
		'spellcategorycooldown_5',
		'bonding',
		'description',
		'PageText',
		'LanguageID',
		'PageMaterial',
		'startquest',
		'lockid',
		'Material',
		'sheath',
		'RandomProperty',
		'RandomSuffix',
		'block',
		'itemset',
		'MaxDurability',
		'area',
		'Map',
		'BagFamily',
		'TotemCategory',
		'socketColor_1',
		'socketContent_1',
		'socketColor_2',
		'socketContent_2',
		'socketColor_3',
		'socketContent_3',
		'socketBonus',
		'GemProperties',
		'RequiredDisenchantSkill',
		'ArmorDamageModifier',
		'duration',
		'ItemLimitCategory',
		'HolidayId',
		'ScriptName',
		'DisenchantID',
		'FoodType',
		'minMoneyLoot',
		'maxMoneyLoot',
		'flagsCustom',
		'VerifiedBuild'
	];
}
