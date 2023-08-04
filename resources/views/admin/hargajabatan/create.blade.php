@extends('layouts.master')
@section('content')

{{-- <h1>Tambah Data Harga Jabatan</h1>
    <form action="{{ route('harga_jabatan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="peringkat_jabatan" class="form-label">Peringkat Jabatan</label>
            <input type="text" class="form-control" id="peringkat_jabatan" name="peringkat_jabatan" required>
        </div>
        <div class="mb-3">
            <label for="harga_jabatan" class="form-label">Harga Jabatan</label>
            <input type="number" class="form-control" id="harga_jabatan" name="harga_jabatan" required>
        </div>
        <div class="mb-3">
            <label for="harga_jabatan2" class="form-label">Harga Jabatan 2</label>
            <input type="number" class="form-control" id="harga_jabatan2" name="harga_jabatan2" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form> --}}

    <div class="col-lg-12">
        <div id="page-wrapper">
            <h4 class="pheader"><i class="fa fa-list fa-fw"></i> DATA HARI LIBUR NASIONAL <font color='#ff0000'></font></h4>
            <div class="" >
            <br>
            <form class='col-md-12' action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
                <div class='col-md-5'>
                    <h5>Tanggal</h5>
                        <input type="text" name='startDate' id="startDate" class="col-md-12 well1">
                </div>
                <div class='col-md-12'></div>
                <div class='col-md-5'>
                    <h5>Keterangan</h5>
                    <textarea  name='ket' id='ket' class="col-md-12 well2 " rows='5'></textarea>
                </div>
                <div class='col-md-12'></div>
                <div class='col-md-3'>
                    <input type='submit' name='submitAdd' id='submitAdd' class="col-md-6 well1 btn btn-primary " value='Simpan'>
                    <button class="col-md-6 well1 btn btn-danger" id='cancel' onclick="window.history.go(-1); return false;">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>


@endsection
