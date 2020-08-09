@extends('layouts.master')

@section('content')

    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Isi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $tanya->judul }}</td>
                            <td>{{ $tanya->isi }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="/pertanyaan" class="btn btn-default btn-sm m-0 float-right">kembali</a>
            </div>
        </div>   
    </div>

@endsection