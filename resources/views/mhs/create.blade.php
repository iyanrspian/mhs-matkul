@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h1><strong>Add Data Mahasiswa</strong></h1>
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
    <form action="{{ route('store') }}" class="form-group" method="post">
        @csrf
        <input type="text" class="form-control mb-3" name="npm" id="" placeholder="NPM">
        <input type="text" class="form-control mb-3" name="nama" id="" placeholder="Nama">
        <input type="text" class="form-control mb-3" name="jurusan" id="" placeholder="Jurusan">
        <input type="text" class="form-control mb-3" name="alamat" id="" placeholder="Alamat">
        <select class="form-control mb-3 input" name="matkul_id" id="">
        @foreach ($matkul as $matakuliah)
            <option value="{{ $matakuliah->id }}">{{ $matakuliah->nama_mk }}</option>
        @endforeach
        </select>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection