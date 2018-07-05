<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PageText
 * 
 * @property int $ID
 * @property string $Text
 * @property int $NextPageID
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class PageText extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'page_text';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'NextPageID' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'Text',
		'NextPageID',
		'VerifiedBuild'
	];
}
