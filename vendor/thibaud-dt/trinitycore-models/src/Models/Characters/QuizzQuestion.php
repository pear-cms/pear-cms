<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QuizzQuestion
 * 
 * @property int $id
 * @property string $question
 * @property string $answer
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class QuizzQuestion extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'quizz_question';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'question',
		'answer'
	];
}
