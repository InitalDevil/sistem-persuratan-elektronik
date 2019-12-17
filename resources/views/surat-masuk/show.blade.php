@extends('layout.app')
@foreach ($suratMasuk as $s)
@section('title', 'Detail Surat Masuk '.$s->no_surat)
@section('content_title', 'Detail Surat Masuk '.$s->no_surat)
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kolom</th>
                            <th>Isi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No Agenda</td>
                            <td>{{ $s->no_agenda }}</td>
                        </tr>
                        <tr>
                            <td>No Surat</td>
                            <td>{{ $s->no_surat }}</td>
                        </tr>
                        <tr>
                            <td>Pengirim</td>
                            <td>{{ $s->pengirim }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Surat</td>
                            <td>{{ $s->jenis_surat }}</td>
                        </tr>
                        <tr>
                            <td>Perihal</td>
                            <td>{{ $s->perihal }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Kirim</td>
                            <td>{{ $s->tgl_kirim }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Terima</td>
                            <td>{{ $s->tgl_terima }}</td>
                        </tr>
                        <tr>
                            <td>Petugas</td>
                            <td>{{ $s->user->nama }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@endforeach