@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-2">
            <div class="float-left">
                <h1><strong>Edit Data Mahasiswa</strong></h1>
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
    <form action="{{ route('update', $mhs->id) }}" class="form-group" method="post">
        @csrf
        <label for="">NPM :</label>
        <input type="text" class="form-control mb-3" name="npm" id="" value="{{ $mhs->npm }}">
        <label for="">Nama :</label>
        <input type="text" class="form-control mb-3" name="nama" id="" value="{{ $mhs->nama }}">
        <label for="">Jurusan :</label>
        <input type="text" class="form-control mb-3" name="jurusan" id="" value="{{ $mhs->jurusan }}">
        <label for="">Alamat :</label>
        <textarea class="form-control mb-3" name="alamat" id="" rows="3">{{ $mhs->alamat }}</textarea>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection