<?php

namespace Modules\Question\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
	protected $table = "question";

	use SoftDeletes;

	public $timestamps = false;
	
    protected $fillable = [
    	'questionText', 'answerA', 'answerB', 'answerC', 'correctAnswer'
    ];
}
