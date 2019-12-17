@extends('layout.app')
@section('title', 'Manage Petugas')
@section('content_title', 'Manage Petugas')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="float-right">
                <a href="{{ route('petugas.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="table-responsive">
                <table class="table table-hover" id="tabelPetugas">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->role }}</td>
                                <td>
                                    <form action="{{ route('petugas.destroy', ['petuga' => $p->id]) }}" method="post">
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
        $("#tabelPetugas").DataTable();
    });
</script>
@endsection