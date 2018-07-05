<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameobjectTemplateLocale
 * 
 * @property int $entry
 * @property string $locale
 * @property string $name
 * @property string $castBarCaption
 * @property int $VerifiedBuild
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GameobjectTemplateLocale extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'gameobject_template_locale';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'name',
		'castBarCaption',
		'VerifiedBuild'
	];
}
