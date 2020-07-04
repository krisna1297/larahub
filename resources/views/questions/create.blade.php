@extends('adminlte.master')

@section('page-header')
<i class="fas fa-question-circle"></i> Entri Pertanyaan
@endsection

@section('content')
    <form action="/pertanyaan" method="POST">
    @csrf
        <div class="form-group">
            <label for="judul">Judul Pertanyaan</label>
            <input type="text" class="form-control" placeholder="Judul pertanyaan" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Pertanyaan</label>
            <textarea class="form-control" placeholder="Isi pertanyaan" id="isi" name="isi" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('pertanyaan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
