<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AnswerModel;
use App\Models\QuestionModel;

class JawabanController extends Controller
{
    public function index($pertanyaan_id)
    {
        $question = QuestionModel::find_by_id($pertanyaan_id);
        $answers = AnswerModel::get_all($pertanyaan_id);

        return view('answers.index', compact('question', 'answers'));
    }

    public function store(Request $request)
    {
        AnswerModel::insert_answer($request->all());

        return redirect()->route('jawaban.index', $request->get('pertanyaan_id'));
    }
}
