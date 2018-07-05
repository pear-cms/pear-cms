<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class EmailDatum
 * 
 * @property int $id
 * @property string $email
 * @property string $commentaire
 *
 * @package ThibaudDT\TrinityCoreModels\Auth
 */
class EmailDatum extends Eloquent
{
	protected $connection = 'auth';
	public $timestamps = false;

	protected $fillable = [
		'email',
		'commentaire'
	];
}
