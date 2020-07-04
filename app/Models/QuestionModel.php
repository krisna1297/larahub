<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

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

    public static function get_all()
    {
        // ambil data tabel pertanyaan dan jumlah jawabannya //
        $questions = DB::table('questions')->get()->toArray();
        foreach($questions as $row => $question) {
            $questions[$row]->answers_count = DB::table('answers')->where('pertanyaan_id', $question->id)->count();
        }
        return $questions;
    }
}
