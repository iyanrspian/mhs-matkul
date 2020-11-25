@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-2">
            <div class="float-left">
                <h1><strong>Edit Data Mata Kuliah</strong></h1>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> terjadi kesalahan!
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('matkul.update', $matkul->id) }}" class="form-group" method="post">
        @csrf
        <label for="">Mata Kuliah :</label>
        <input type="text" class="form-control mb-3" name="nama" id="" value="{{ $matkul->nama_mk }}">
        <label for="">Nama Dosen :</label>
        <input type="text" class="form-control mb-3" name="jurusan" id="" value="{{ $matkul->dosen_mk }}">
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection