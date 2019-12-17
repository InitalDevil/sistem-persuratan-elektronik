@extends('layout.app')
@section('title', 'Detail Disposisi')
@section('content_title', 'Detail Disposisi')
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
                        @foreach ($disposisi as $d)
                        <tr>
                            <td>No Surat</td>
                            <td>{{ $d->no_surat }}</td>
                        </tr>
                        <tr>
                            <td>Kepada</td>
                            <td>{{ $d->kepada }}</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>{{ $d->keterangan }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                @if ($d->status == 0)
                                Belum Dibaca
                                @elseif ($d->status == 1)
                                Sudah Dibaca
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggapan</td>
                            <td>{{ $d->tanggapan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection