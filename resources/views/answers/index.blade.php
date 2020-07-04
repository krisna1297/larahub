@extends('adminlte.master')

@section('page-header')
<i class="fas fa-comments"></i> Daftar Jawaban
@endsection

@section('content')
<div class="alert">
    <b>{{ $question->judul }}</b> <small><em>{{ $question->created_at }}</em></small>
    <p>{{ $question->isi }}</p>
</div>
@if (!count($answers))
    <hr>
    <p class="text-danger"><b>Belum ada jawaban</b></p>
@else
    @foreach ($answers as $i => $row)
    <hr>
    <p>
        <b>#{{ $i+1 }}.</b> {{ $row->isi }}
        (<small><em>{{ $row->updated_at }}</em></small>)
    </p>
    @endforeach
@endif
<hr>
<form action="/jawaban/{{ $question->id }}" method="POST">
    <input type="hidden" name="pertanyaan_id" value="{{ $question->id }}" />
    @csrf
    <div class="form-group">
        <label for="jawaban">Jawaban</label>
        <textarea class="form-control" placeholder="Isi jawaban" id="jawaban" name="jawaban" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('pertanyaan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection

