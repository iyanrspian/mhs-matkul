@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h1><b>{{ $matkul->nama_mk }}</b></h1>
                <h4>Dosen : {{ $matkul->dosen_mk }}</h4>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered mb-2 mt-1" cellpadding=3>
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matkul->mhs as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->npm }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->jurusan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div>
        {{ $matkul->links() }}
    </div> --}}
    <!-- Modal -->
    {{-- <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('mhsimport') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-grup">
                        <input type="file" name="file" required="required">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
        </div>
        </div>
    </div> --}}
@endsection