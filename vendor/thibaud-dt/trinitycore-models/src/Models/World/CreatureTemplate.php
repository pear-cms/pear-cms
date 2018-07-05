<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureTemplate
 * 
 * @property int $entry
 * @property int $difficulty_entry_1
 * @property int $difficulty_entry_2
 * @property int $difficulty_entry_3
 * @property int $KillCredit1
 * @property int $KillCredit2
 * @property int $modelid1
 * @property int $modelid2
 * @property int $modelid3
 * @property int $modelid4
 * @property string $name
 * @property string $subname
 * @property string $IconName
 * @property int $gossip_menu_id
 * @property int $minlevel
 * @property int $maxlevel
 * @property int $exp
 * @property int $faction
 * @property int $npcflag
 * @property float $speed_walk
 * @property float $speed_run
 * @property float $scale
 * @property int $rank
 * @property int $dmgschool
 * @property int $BaseAttackTime
 * @property int $RangeAttackTime
 * @property float $BaseVariance
 * @property float $RangeVariance
 * @property int $unit_class
 * @property int $unit_flags
 * @property int $unit_flags2
 * @property int $dynamicflags
 * @property int $family
 * @property int $trainer_type
 * @property int $trainer_spell
 * @property int $trainer_class
 * @property int $trainer_race
 * @property int $type
 * @property int $type_flags
 * @property int $lootid
 * @property int $pickpocketloot
 * @property int $skinloot
 * @property int $resistance1
 * @property int $resistance2
 * @property int $resistance3
 * @property int $resistance4
 * @property int $resistance5
 * @property int $resistance6
 * @property int $spell1
 * @property int $spell2
 * @property int $spell3
 * @property int $spell4
 * @property int $spell5
 * @property int $spell6
 * @property int $spell7
 * @property int $spell8
 * @property int $PetSpellDataId
 * @property int $VehicleId
 * @property int $mingold
 * @property int $maxgold
 * @property string $AIName
 * @property int $MovementType
 * @property int $InhabitType
 * @property float $HoverHeight
 * @property float $HealthModifier
 * @property float $ManaModifier
 * @property float $ArmorModifier
 * @property float $DamageModifier
 * @property float $ExperienceModifier
 * @property int $RacialLeader
 * @property int $movementId
 * @property int $RegenHealth
 * @property int $mechanic_immune_mask
 * @property int $flags_extra
 * @property string $ScriptName
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureTemplate extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_template';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'difficulty_entry_1' => 'int',
		'difficulty_entry_2' => 'int',
		'difficulty_entry_3' => 'int',
		'KillCredit1' => 'int',
		'KillCredit2' => 'int',
		'modelid1' => 'int',
		'modelid2' => 'int',
		'modelid3' => 'int',
		'modelid4' => 'int',
		'gossip_menu_id' => 'int',
		'minlevel' => 'int',
		'maxlevel' => 'int',
		'exp' => 'int',
		'faction' => 'int',
		'npcflag' => 'int',
		'speed_walk' => 'float',
		'speed_run' => 'float',
		'scale' => 'float',
		'rank' => 'int',
		'dmgschool' => 'int',
		'BaseAttackTime' => 'int',
		'RangeAttackTime' => 'int',
		'BaseVariance' => 'float',
		'RangeVariance' => 'float',
		'unit_class' => 'int',
		'unit_flags' => 'int',
		'unit_flags2' => 'int',
		'dynamicflags' => 'int',
		'family' => 'int',
		'trainer_type' => 'int',
		'trainer_spell' => 'int',
		'trainer_class' => 'int',
		'trainer_race' => 'int',
		'type' => 'int',
		'type_flags' => 'int',
		'lootid' => 'int',
		'pickpocketloot' => 'int',
		'skinloot' => 'int',
		'resistance1' => 'int',
		'resistance2' => 'int',
		'resistance3' => 'int',
		'resistance4' => 'int',
		'resistance5' => 'int',
		'resistance6' => 'int',
		'spell1' => 'int',
		'spell2' => 'int',
		'spell3' => 'int',
		'spell4' => 'int',
		'spell5' => 'int',
		'spell6' => 'int',
		'spell7' => 'int',
		'spell8' => 'int',
		'PetSpellDataId' => 'int',
		'VehicleId' => 'int',
		'mingold' => 'int',
		'maxgold' => 'int',
		'MovementType' => 'int',
		'InhabitType' => 'int',
		'HoverHeight' => 'float',
		'HealthModifier' => 'float',
		'ManaModifier' => 'float',
		'ArmorModifier' => 'float',
		'DamageModifier' => 'float',
		'ExperienceModifier' => 'float',
		'RacialLeader' => 'int',
		'movementId' => 'int',
		'RegenHealth' => 'int',
		'mechanic_immune_mask' => 'int',
		'flags_extra' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'difficulty_entry_1',
		'difficulty_entry_2',
		'difficulty_entry_3',
		'KillCredit1',
		'KillCredit2',
		'modelid1',
		'modelid2',
		'modelid3',
		'modelid4',
		'name',
		'subname',
		'IconName',
		'gossip_menu_id',
		'minlevel',
		'maxlevel',
		'exp',
		'faction',
		'npcflag',
		'speed_walk',
		'speed_run',
		'scale',
		'rank',
		'dmgschool',
		'BaseAttackTime',
		'RangeAttackTime',
		'BaseVariance',
		'RangeVariance',
		'unit_class',
		'unit_flags',
		'unit_flags2',
		'dynamicflags',
		'family',
		'trainer_type',
		'trainer_spell',
		'trainer_class',
		'trainer_race',
		'type',
		'type_flags',
		'lootid',
		'pickpocketloot',
		'skinloot',
		'resistance1',
		'resistance2',
		'resistance3',
		'resistance4',
		'resistance5',
		'resistance6',
		'spell1',
		'spell2',
		'spell3',
		'spell4',
		'spell5',
		'spell6',
		'spell7',
		'spell8',
		'PetSpellDataId',
		'VehicleId',
		'mingold',
		'maxgold',
		'AIName',
		'MovementType',
		'InhabitType',
		'HoverHeight',
		'HealthModifier',
		'ManaModifier',
		'ArmorModifier',
		'DamageModifier',
		'ExperienceModifier',
		'RacialLeader',
		'movementId',
		'RegenHealth',
		'mechanic_immune_mask',
		'flags_extra',
		'ScriptName',
		'VerifiedBuild'
	];
}
