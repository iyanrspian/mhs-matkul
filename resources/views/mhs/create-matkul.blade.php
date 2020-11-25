@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h1><strong>Add Data Mata Kuliah</strong></h1>
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
    <form action="{{ route('matkul.store') }}" class="form-group" method="post">
        @csrf
        <input type="text" class="form-control mb-3" name="nama_mk" id="" placeholder="Mata Kuliah">
        <input type="text" class="form-control mb-3" name="dosen_mk" id="" placeholder="Nama Dosen">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection