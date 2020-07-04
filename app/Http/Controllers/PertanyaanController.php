<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index_elo()
    {
        $questions = QuestionModel::withCount('answers')->get();
        return view('questions.index', compact('questions'));
    }

    public function index()
    {
        $questions = QuestionModel::get_all();

        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        QuestionModel::insert_question($request->all());

        return redirect()->route('pertanyaan.index');
    }

    public function edit($id)
    {
        $question = QuestionModel::find_by_id($id);

        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $question = QuestionModel::update_question($id, $request->all());

        return redirect()->route('pertanyaan.index');
    }

    public function destroy($id)
    {
        $deleted = QuestionModel::hapus($id);
        return redirect()->route('pertanyaan.index');
    }
}
