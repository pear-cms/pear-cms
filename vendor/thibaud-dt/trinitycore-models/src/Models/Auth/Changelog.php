<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Changelog
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $created
 * @property string $author
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class Changelog extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'changelog';
	public $timestamps = false;

	protected $casts = [
		'created' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'created',
		'author'
	];
}
