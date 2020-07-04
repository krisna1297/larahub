<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnswerModel extends Model
{
    protected $table = "answers";

    public function question($pid)
    {
        return $this->belongsTo('App\Models\QuestionModel');
    }

    public static function get_all($id)
    {
        return DB::table('answers')->where('pertanyaan_id', $id)->get();
    }

    public static function find_by_id($id)
    {
        return DB::table('answers')->where('id', $id)->first();
    }

    public static function insert_answer($request)
    {
        $now = date_create()->format('Y-m-d H:i:s');
        return DB::table('answers')->insert([
            'pertanyaan_id' => $request['pertanyaan_id'],
            'isi' => $request['jawaban'],
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }

    public static function update_answer($id, $request)
    {
        $now = date_create()->format('Y-m-d H:i:s');
        return DB::table('answers')
            ->where('id', $id)
            ->update([
                'pertanyaan_id' => $request['pertanyaan_id'],
                'isi' => $request['jawaban'],
                'updated_at' => $now
            ]);
    }

}
