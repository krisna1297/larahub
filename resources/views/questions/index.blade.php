@extends('adminlte.master')

@section('page-header')
<i class="fas fa-question-circle"></i> Daftar Pertanyaan
@endsection

@section('page-header-button')
<a href="{{ route('pertanyaan.create') }}" class="btn btn-primary">Add Pertanyaan</a>
@endsection

@section('content')
<table class="table table-condensed table-striped datatable">
    <thead>
        <tr class="table table-warning">
            <th class="text-center" width="5%">No</th>
            <th class="text-center">Pertanyaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($questions as $i => $row)
        <tr>
            <td class="text-center">{{ $i+1 }}.</td>
            <td>
                <b>{{ $row->judul }}</b> <small><em>(created {{ $row->created_at }})</em></small>
                @if ($row->created_at != $row->updated_at)
                    <small><em> (modified {{ $row->updated_at }})</em></small>
                @endif
                <p>{{ $row->isi }}</p>
                <hr>
                <a href="{{ route('pertanyaan.edit', $row->id) }}" title="Rubah pertanyaan : {{ $row->judul }}">
                    <span class="badge badge-warning">Edit</span>
                </a>
                |

                @if ($row->answers_count === 0)
                <!-- Asumsi kalau ada jawaban maka pertanyaan tidak dapat dihapus! -->
                <form action="/pertanyaan/{{ $row->id }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="badge badge-danger" style="border: none">Hapus</button>
                </form>
                |
                @endif

                <a href="{{ route('jawaban.index', $row->id) }}" title="Jawaban : {{ $row->judul }}">
                    <span class="badge badge-success">{{ $row->answers_count }} Jawaban</span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@push('css')
<!-- Datatable CSS -->
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush


@push('js')
<!-- Datatable Scripts -->
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}"></script>
<script>
$(function () {
    $('table.datatable').DataTable();
});
</script>

@endpush
