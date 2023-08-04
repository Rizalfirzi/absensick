@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <!-- Kolom lg-5 -->
        <div class="col-lg-5 d-flex align-items-stretch">
            <div class="col-lg-12">
                <h4><i class="fa fa-list fa-fw"></i> MASTER PERINGKAT HARGA JABATAN<font color='#ff0000'></font></h4>
            </div>
        </div>
        <hr>
        <!-- Kolom lg-12 -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 alert">
                    <a href='{{'/harga_jabatan/create'}}'><input type='button' class='well1 btn btn-success' id='tambah' value='Tambah Baru' style='float:right;right:5%;'></a>
                </div>
            </div>
        </div>
    </div>
</div>
<table id="" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th scope="col">Peringkat Jabatan</th>
            <th scope="col">Harga Jabatan</th>
            <th scope="col">Harga Jabatan 2</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($harga_jabatan as $data)
                <tr>
                    <td>{{ $data->peringkat_jabatan }}</td>
                    <td>{{ $data->harga_jabatan }}</td>
                    <td>{{ $data->harga_jabatan2 }}</td>
                    <td>
                        <a href="{{ route('harga_jabatan.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('harga_jabatan.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>

@endsection
