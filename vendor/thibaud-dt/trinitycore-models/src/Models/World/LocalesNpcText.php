<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LocalesNpcText
 * 
 * @property int $ID
 * @property string $Text0_0_loc1
 * @property string $Text0_0_loc2
 * @property string $Text0_0_loc3
 * @property string $Text0_0_loc4
 * @property string $Text0_0_loc5
 * @property string $Text0_0_loc6
 * @property string $Text0_0_loc7
 * @property string $Text0_0_loc8
 * @property string $Text0_1_loc1
 * @property string $Text0_1_loc2
 * @property string $Text0_1_loc3
 * @property string $Text0_1_loc4
 * @property string $Text0_1_loc5
 * @property string $Text0_1_loc6
 * @property string $Text0_1_loc7
 * @property string $Text0_1_loc8
 * @property string $Text1_0_loc1
 * @property string $Text1_0_loc2
 * @property string $Text1_0_loc3
 * @property string $Text1_0_loc4
 * @property string $Text1_0_loc5
 * @property string $Text1_0_loc6
 * @property string $Text1_0_loc7
 * @property string $Text1_0_loc8
 * @property string $Text1_1_loc1
 * @property string $Text1_1_loc2
 * @property string $Text1_1_loc3
 * @property string $Text1_1_loc4
 * @property string $Text1_1_loc5
 * @property string $Text1_1_loc6
 * @property string $Text1_1_loc7
 * @property string $Text1_1_loc8
 * @property string $Text2_0_loc1
 * @property string $Text2_0_loc2
 * @property string $Text2_0_loc3
 * @property string $Text2_0_loc4
 * @property string $Text2_0_loc5
 * @property string $Text2_0_loc6
 * @property string $Text2_0_loc7
 * @property string $Text2_0_loc8
 * @property string $Text2_1_loc1
 * @property string $Text2_1_loc2
 * @property string $Text2_1_loc3
 * @property string $Text2_1_loc4
 * @property string $Text2_1_loc5
 * @property string $Text2_1_loc6
 * @property string $Text2_1_loc7
 * @property string $Text2_1_loc8
 * @property string $Text3_0_loc1
 * @property string $Text3_0_loc2
 * @property string $Text3_0_loc3
 * @property string $Text3_0_loc4
 * @property string $Text3_0_loc5
 * @property string $Text3_0_loc6
 * @property string $Text3_0_loc7
 * @property string $Text3_0_loc8
 * @property string $Text3_1_loc1
 * @property string $Text3_1_loc2
 * @property string $Text3_1_loc3
 * @property string $Text3_1_loc4
 * @property string $Text3_1_loc5
 * @property string $Text3_1_loc6
 * @property string $Text3_1_loc7
 * @property string $Text3_1_loc8
 * @property string $Text4_0_loc1
 * @property string $Text4_0_loc2
 * @property string $Text4_0_loc3
 * @property string $Text4_0_loc4
 * @property string $Text4_0_loc5
 * @property string $Text4_0_loc6
 * @property string $Text4_0_loc7
 * @property string $Text4_0_loc8
 * @property string $Text4_1_loc1
 * @property string $Text4_1_loc2
 * @property string $Text4_1_loc3
 * @property string $Text4_1_loc4
 * @property string $Text4_1_loc5
 * @property string $Text4_1_loc6
 * @property string $Text4_1_loc7
 * @property string $Text4_1_loc8
 * @property string $Text5_0_loc1
 * @property string $Text5_0_loc2
 * @property string $Text5_0_loc3
 * @property string $Text5_0_loc4
 * @property string $Text5_0_loc5
 * @property string $Text5_0_loc6
 * @property string $Text5_0_loc7
 * @property string $Text5_0_loc8
 * @property string $Text5_1_loc1
 * @property string $Text5_1_loc2
 * @property string $Text5_1_loc3
 * @property string $Text5_1_loc4
 * @property string $Text5_1_loc5
 * @property string $Text5_1_loc6
 * @property string $Text5_1_loc7
 * @property string $Text5_1_loc8
 * @property string $Text6_0_loc1
 * @property string $Text6_0_loc2
 * @property string $Text6_0_loc3
 * @property string $Text6_0_loc4
 * @property string $Text6_0_loc5
 * @property string $Text6_0_loc6
 * @property string $Text6_0_loc7
 * @property string $Text6_0_loc8
 * @property string $Text6_1_loc1
 * @property string $Text6_1_loc2
 * @property string $Text6_1_loc3
 * @property string $Text6_1_loc4
 * @property string $Text6_1_loc5
 * @property string $Text6_1_loc6
 * @property string $Text6_1_loc7
 * @property string $Text6_1_loc8
 * @property string $Text7_0_loc1
 * @property string $Text7_0_loc2
 * @property string $Text7_0_loc3
 * @property string $Text7_0_loc4
 * @property string $Text7_0_loc5
 * @property string $Text7_0_loc6
 * @property string $Text7_0_loc7
 * @property string $Text7_0_loc8
 * @property string $Text7_1_loc1
 * @property string $Text7_1_loc2
 * @property string $Text7_1_loc3
 * @property string $Text7_1_loc4
 * @property string $Text7_1_loc5
 * @property string $Text7_1_loc6
 * @property string $Text7_1_loc7
 * @property string $Text7_1_loc8
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class LocalesNpcText extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'locales_npc_text';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int'
	];

	protected $fillable = [
		'Text0_0_loc1',
		'Text0_0_loc2',
		'Text0_0_loc3',
		'Text0_0_loc4',
		'Text0_0_loc5',
		'Text0_0_loc6',
		'Text0_0_loc7',
		'Text0_0_loc8',
		'Text0_1_loc1',
		'Text0_1_loc2',
		'Text0_1_loc3',
		'Text0_1_loc4',
		'Text0_1_loc5',
		'Text0_1_loc6',
		'Text0_1_loc7',
		'Text0_1_loc8',
		'Text1_0_loc1',
		'Text1_0_loc2',
		'Text1_0_loc3',
		'Text1_0_loc4',
		'Text1_0_loc5',
		'Text1_0_loc6',
		'Text1_0_loc7',
		'Text1_0_loc8',
		'Text1_1_loc1',
		'Text1_1_loc2',
		'Text1_1_loc3',
		'Text1_1_loc4',
		'Text1_1_loc5',
		'Text1_1_loc6',
		'Text1_1_loc7',
		'Text1_1_loc8',
		'Text2_0_loc1',
		'Text2_0_loc2',
		'Text2_0_loc3',
		'Text2_0_loc4',
		'Text2_0_loc5',
		'Text2_0_loc6',
		'Text2_0_loc7',
		'Text2_0_loc8',
		'Text2_1_loc1',
		'Text2_1_loc2',
		'Text2_1_loc3',
		'Text2_1_loc4',
		'Text2_1_loc5',
		'Text2_1_loc6',
		'Text2_1_loc7',
		'Text2_1_loc8',
		'Text3_0_loc1',
		'Text3_0_loc2',
		'Text3_0_loc3',
		'Text3_0_loc4',
		'Text3_0_loc5',
		'Text3_0_loc6',
		'Text3_0_loc7',
		'Text3_0_loc8',
		'Text3_1_loc1',
		'Text3_1_loc2',
		'Text3_1_loc3',
		'Text3_1_loc4',
		'Text3_1_loc5',
		'Text3_1_loc6',
		'Text3_1_loc7',
		'Text3_1_loc8',
		'Text4_0_loc1',
		'Text4_0_loc2',
		'Text4_0_loc3',
		'Text4_0_loc4',
		'Text4_0_loc5',
		'Text4_0_loc6',
		'Text4_0_loc7',
		'Text4_0_loc8',
		'Text4_1_loc1',
		'Text4_1_loc2',
		'Text4_1_loc3',
		'Text4_1_loc4',
		'Text4_1_loc5',
		'Text4_1_loc6',
		'Text4_1_loc7',
		'Text4_1_loc8',
		'Text5_0_loc1',
		'Text5_0_loc2',
		'Text5_0_loc3',
		'Text5_0_loc4',
		'Text5_0_loc5',
		'Text5_0_loc6',
		'Text5_0_loc7',
		'Text5_0_loc8',
		'Text5_1_loc1',
		'Text5_1_loc2',
		'Text5_1_loc3',
		'Text5_1_loc4',
		'Text5_1_loc5',
		'Text5_1_loc6',
		'Text5_1_loc7',
		'Text5_1_loc8',
		'Text6_0_loc1',
		'Text6_0_loc2',
		'Text6_0_loc3',
		'Text6_0_loc4',
		'Text6_0_loc5',
		'Text6_0_loc6',
		'Text6_0_loc7',
		'Text6_0_loc8',
		'Text6_1_loc1',
		'Text6_1_loc2',
		'Text6_1_loc3',
		'Text6_1_loc4',
		'Text6_1_loc5',
		'Text6_1_loc6',
		'Text6_1_loc7',
		'Text6_1_loc8',
		'Text7_0_loc1',
		'Text7_0_loc2',
		'Text7_0_loc3',
		'Text7_0_loc4',
		'Text7_0_loc5',
		'Text7_0_loc6',
		'Text7_0_loc7',
		'Text7_0_loc8',
		'Text7_1_loc1',
		'Text7_1_loc2',
		'Text7_1_loc3',
		'Text7_1_loc4',
		'Text7_1_loc5',
		'Text7_1_loc6',
		'Text7_1_loc7',
		'Text7_1_loc8'
	];
}
