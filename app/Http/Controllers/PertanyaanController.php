<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        $questions = QuestionModel::withCount('answers')->get();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $new_question = new \App\Models\QuestionModel;
        $new_question->judul = $request->get('judul');
        $new_question->isi = $request->get('isi');

        $new_question->save();

        return redirect()->route('pertanyaan.index');
    }
}
