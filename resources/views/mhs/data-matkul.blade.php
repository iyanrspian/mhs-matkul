@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h1 class="text-center">Data <b>Mata Kuliah</b></h1>
    <div class="row">
        @foreach ($matkul as $matakuliah)
        <div class="col-sm-3 mt-2">
            <div class="card mb-2" style="width:17rem;">
                <h5 class="card-header"><b>Informasi Mata Kuliah</b></h5>
                <div class="card-body">
                    <h5 class="card-title"><b>{{ $matakuliah->nama_mk }}</b></h5>
                    <p class="card-text">Kode MK - {{ $matakuliah->id }}<br>Dosen : {{ $matakuliah->dosen_mk }}</p>
                    <a href="#" class="btn btn-outline-primary btn-rounded btn-block">Edit Mata Kuliah</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection