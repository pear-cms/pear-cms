<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GmSubsurvey
 * 
 * @property int $surveyId
 * @property int $questionId
 * @property int $answer
 * @property string $answerComment
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class GmSubsurvey extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'gm_subsurvey';
	public $timestamps = false;

	protected $casts = [
		'questionId' => 'int',
		'answer' => 'int'
	];

	protected $fillable = [
		'answer',
		'answerComment'
	];
}
