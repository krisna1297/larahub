<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class QuestionModel extends Model
{
    protected $table = "questions";

    public function answers()
    {
        return $this->hasMany('App\Models\AnswerModel', 'pertanyaan_id');
    }

    public function count_jawaban(): array
    {
        return $this->withCount('answers')->get()->toArray();
    }
}
