@extends('adminlte.master')

@section('page-header')
<i class="fas fa-question-circle"></i> Detail Pertanyaan
@endsection

@section('content')
<div class="alert">
    <h4>{{ $data['question']->judul }}</h4>
    <p>{{ $data['question']->isi }}</p>
    <hr>
    <small>
    Created at {{ $data['question']->created_at }} |
    Updated at {{ $data['question']->updated_at }}
    </small>

</div>
@if (!count($data['answers']))
    <hr>
    <p class="text-danger"><b>Belum ada jawaban</b></p>
@else
    <h2>Jawaban :</h2>
    @foreach ($data['answers'] as $i => $row)
        <hr>
        <p>
            <b>#{{ $i+1 }}.</b> {{ $row->isi }}
            (<small><em>{{ $row->updated_at }}</em></small>)
        </p>
    @endforeach
@endif
<hr>
<a href="{{ route('pertanyaan.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
