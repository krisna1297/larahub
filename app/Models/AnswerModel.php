<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    protected $table = "answers";

    public function question($pid)
    {
        return $this->belongsTo('App\Models\QuestionModel');
    }
}
