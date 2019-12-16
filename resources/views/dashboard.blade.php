@extends('layout.app')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-12">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ count($suratMasuk) }}</h3>
                    <p>Surat Masuk Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-email-unread"></i>
                </div>
                @if (count($suratMasuk) != 0)
                <a href="#" id="surat_masuk" class="small-box-footer">Lihat Selengkapnya<i
                        class="fas fa-arrow-circle-right"></i></a>
                @endif
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ count($suratKeluar) }}</h3>
                    <p>Surat Keluar Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-paper-airplane"></i>
                </div>
                @if (count($suratKeluar) != 0)
                <a href="#" id="surat_keluar" class="small-box-footer">Lihat Selengkapnya<i
                        class="fas fa-arrow-circle-right"></i></a>
                @endif
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ count($disposisi) }}</h3>
                    <p>Surat Terdisposisi Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-share"></i>
                </div>
                @if (count($disposisi) != 0)
                <a href="#" id="surat_disposisi" class="small-box-footer">Lihat Selengkapnya<i
                        class="fas fa-arrow-circle-right"></i></a>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-hover d-none" id="suratMasuk">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Agenda</th>
                            <th>No Surat</th>
                            <th>Petugas</th>
                            <th>Jenis Surat</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Tanggal Dikirim</th>
                            <th>Tanggal Diterima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hover d-none" id="suratKeluar">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Agenda</th>
                            <th>No Surat</th>
                            <th>Petugas</th>
                            <th>Jenis Surat</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Tanggal Dikirim</th>
                            <th>Tanggal Diterima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hover d-none" id="suratDisposisi">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Disposisi</th>
                            <th>No Agenda</th>
                            <th>Kepada</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Tanggapan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#surat_masuk').click(function () {
            $('#suratKeluar,#suratDisposisi').addClass('d-none');
            $('#suratMasuk').removeClass('d-none');
            $('#suratMasuk').DataTable({
                "pageLength": 10
            });
        });
        $('#surat_keluar').click(function () {
            $('#suratMasuk,#suratDisposisi').addClass('d-none');
            $('#suratKeluar').removeClass('d-none');
            $('#suratKeluar').DataTable({
                "pageLength": 10
            });
        });
        $('#surat_disposisi').click(function () {
            $('#suratMasuk,#suratKeluar').addClass('d-none');
            $('#suratDisposisi').removeClass('d-none');
            $('#suratDisposisi').DataTable({
                "pageLength": 10
            });
        });
    })
</script>
@endsection