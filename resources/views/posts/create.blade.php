@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <!-- nilai /=  value="{{ old('judul','') }}" -->
        <!-- form start -->
        <form role="form" action="/pertanyaan" method="POST">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi">Pertanyaan</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan Pertanyaan">
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="/pertanyaan" class="btn btn-default btn-sm m-0 float-right">kembali</a>
            </div>
        </form>
    </div>
</div>

@endsection