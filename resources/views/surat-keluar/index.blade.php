@extends('layout.app')
@section('title', 'Surat Keluar')
@section('content_title', 'Surat Keluar')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="float-right">
                <a href="{{ route('surat-keluar.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="table-responsive">
                <table class="table table-hover" id="tabelSuratKeluar">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Agenda</th>
                            <th>No Surat</th>
                            <th>Jenis Surat</th>
                            <th>Pengirim</th>
                            <th>Tanggal Dikirim</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suratKeluar as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->no_agenda }}</td>
                                <td>{{ $s->no_surat }}</td>
                                <td>{{ $s->jenis_surat }}</td>
                                <td>{{ $s->pengirim }}</td>
                                <td>{{ $s->tgl_kirim }}</td>
                                <td>
                                    <a href="{{ route('surat-keluar.show', ['surat_keluar' => $s->no_surat]) }}" class="btn btn-link">
                                        <i class="fas fa-eye"></i> Lihat Data
                                    </a>
                                    <a href="{{ route('surat-keluar.edit', ['surat_keluar' => $s->no_surat]) }}" class="btn btn-link">
                                        <i class="fas fa-edit"></i> Ubah Data
                                    </a>
                                    <form action="{{ route('surat-keluar.destroy', ['surat_keluar' => $s->no_surat]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" name="submit" class="btn btn-outline-danger">
                                            <i class="fas fa-trash"></i> Hapus Data
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#tabelSuratKeluar").DataTable();
    });
</script>
@endsection