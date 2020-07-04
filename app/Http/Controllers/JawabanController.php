<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AnswerModel;
use App\Models\QuestionModel;

class JawabanController extends Controller
{
    public function index_elo($pid)
    {
        $question = QuestionModel::find($pid);
        $answers = $question->answers;
        return view('answers.index', compact('question', 'answers'));
    }

    public function index($pertanyaan_id)
    {
        $question = DB::table('questions')->where('id', $pertanyaan_id)->first();
        $answers = DB::table('answers')->where('pertanyaan_id', $pertanyaan_id)->get();

        return view('answers.index', compact('question', 'answers'));
    }

    public function store(Request $request)
    {
        $new_jawaban = new \App\Models\AnswerModel;
        $new_jawaban->isi = $request->get('jawaban');
        $new_jawaban->pertanyaan_id = $request->get('pertanyaan_id');

        $new_jawaban->save();

        return redirect()->route('jawaban.index', $request->get('pertanyaan_id'));
    }
}
