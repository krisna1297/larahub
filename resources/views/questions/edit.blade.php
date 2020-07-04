@extends('adminlte.master')

@section('page-header')
<i class="fas fa-edit"></i> Edit Pertanyaan
@endsection

@section('content')
    <form action="{{ route('pertanyaan.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $question->id }}" />
        <div class="form-group">
            <label for="judul">Judul Pertanyaan</label>
            <input type="text" class="form-control" placeholder="Judul pertanyaan" id="judul" name="judul" value="{{ $question->judul }}" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Pertanyaan</label>
            <textarea class="form-control" placeholder="Isi pertanyaan" id="isi" name="isi" rows="3" required>{{ $question->isi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pertanyaan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
