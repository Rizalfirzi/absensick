@extends('layouts.master')
@section('content')
<style>
     th {
            text-align: center;
        }
</style>
    <div class="container">
        <div class="row">
            <!-- Kolom lg-5 -->
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="col-lg-10">
                    <h4><i class="fa fa-list fa-fw"></i> TUNJANGAN KARYAWAN<font color='#ff0000'></font>
                    </h4>
                </div>
            </div>
            <hr>
            <!-- Kolom lg-12 -->

            <div class="col-md-12">
                <form id="filterForm" action="{{ route('tukin.filter') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Direktorat</h5>
                            <select name="direktorat" id="direktorat" class="form-control" required>
                                <option value="">-- Pilih Direktorat --</option>
                                @foreach ($direktorats as $direktorat)
                                    <option value="{{ $direktorat->direktorat_id }}">{{ $direktorat->direktorat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <h5>Satker / Unit Kerja</h5>
                            <div id="isisatker">
                                <select name="satker" id="satker" class="form-control">
                                    <!-- Opsi satker akan diisi melalui JavaScript -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h5>Tahun</h5>
                            <select name="tahun" id="tahun" class="well1 col-md-12 form-control">
                                @foreach ($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <h5>Bulan</h5>
                            <select name="bulan" id="bulan" class="well1 col-md-12 form-control">
                                @foreach ($months as $bulan)
                                    <option value="{{ $bulan }}">{{ $bulan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="btn-group">
                                <div>
                                  <a href="">  <input type="button" class="well1 btn btn-primary" id="lihat" value="Lihat"></a>
                                </div>
                                <div>
                                    <a href=""><input type="button" class="well1 btn btn-primary" id="proses" value="Proses"></a>
                                </div>
                            </div>
                            <div class="mt-2"> <!-- Add some margin at the top -->
                                <a href="" type="button" class="well1 btn btn-primary"> Pajak</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <br>
        <div class="containerScrol">
            <table id="example3" class="lebartabel table table-bordered table-striped" width="100%" cellspacing="1">
                <thead>
                    <tr>
                        <th rowspan="4" >NIP</th>
                        <th rowspan="4">NAMA</th>
                        <th rowspan="4">PERINGKAT JABATAN</th>

                        <th rowspan="4">HARGA JABATAN</th>
                        <th rowspan="4">NILAI PRESTASI (%)</th>
                        <th rowspan="4">TUNJANGAN DASAR</th>
                        <th rowspan="4">TOTAL TUNJANGAN DITERIMA</th>
                        <th colspan="16">POTONGAN KETIDAK HADIRAN KARENA :</th>
                    </tr>
                    <tr>
                        <th colspan="6">CUTI</th>
                        <th colspan="2" rowspan="2">TUBEL</th>
                        <th colspan="2" rowspan="2">IZIN</th>
                        <th colspan="2">TIDAK MASUK KERJA</th>
                        <th colspan="4">KEKURANGAN JAM KERJA</th>
                    </tr>
                    <tr>
                        <th colspan="2">CUTI BESAR</th>
                        <th colspan="2">CUTI ALASAN PENTING</th>
                        <th colspan="2">CUTI MELAHIRKAN ANAK KE-3 DST</th>
                        <th colspan="2">TANPA KETERANGAN</th>
                        <th colspan="4">(DLM JAM)</th>
                    </tr>
                    <tr>
                        <th>BLN KE-</th>
                        <th>Rp. POT</th>
                        <th>BLN KE-</th>
                        <th>Rp. POT</th>
                        <th>BLN KE-</th>
                        <th>Rp. POT</th>
                        <th>BLN</th>
                        <th>Rp. POT</th>
                        <th>JML HARI</th>
                        <th>Rp. POT</th>
                        <th>JML HARI</th>
                        <th>Rp. POT</th>
                        <th>TL</th>
                        <th>PSW</th>
                        <th>TOTAL KJK</th>
                        <th>Rp. POT</th>
                    </tr>
                    <tr>
                        <th colspan='26' class="highlight-cell bg-warning" >
                            <i class='fa fa-list fa-fw'></i>
                            @if ($satkerName)
                            {{ $satkerName }}
                        @endif
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tukinMatangs as $dtmatang)
                    <tr>
                        <td>{{ $dtmatang->nip }}</td>
                        <td>{{ $dtmatang->nama }}</td>
                        <td>{{ $dtmatang->gradejabatan }}</td>
                        <td>{{ number_format($dtmatang->harga_jabatan, 0, ',', '.') }}</td>
                        <td>{{ $dtmatang->skp_persentase }}</td>
                        <td>{{ number_format($dtmatang->tukin_dasar, 0, ',', '.') }}</td>
                        <td>{{ number_format($dtmatang->tukin_terima, 0, ',', '.') }}</td>
                        <td>{{ $dtmatang->cuti_besar }}</td>
                        <td>{{ $dtmatang->cuti_besar_pot }}</td>
                        <td>{{ $dtmatang->cuti_penting }}</td>
                        <td>{{ $dtmatang->cuti_penting_pot }}</td>
                        <td>{{ $dtmatang->cuti_lahir }}</td>
                        <td>{{ $dtmatang->cuti_lahir_pot }}</td>
                        <td>{{ $dtmatang->tubel }}</td>
                        <td>{{ $dtmatang->tubel_pot }}</td>
                        <td>{{ $dtmatang->izin }}</td>
                        <td>{{ $dtmatang->izin_pot }}</td>
                        <td>{{ $dtmatang->tk }}</td>
                        <td>{{ $dtmatang->tk_pot }}</td>
                        <td>{{ $dtmatang->telat_tl }}</td>
                        <td>{{ $dtmatang->psw }}</td>
                        <td>{{ $dtmatang->total_kjk }}</td>
                        <td>{{ number_format($dtmatang->kjk_pot, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                    <!-- Isi data random untuk beberapa baris lainnya -->
                </tbody>
        </table>
        </div>
    @endsection
