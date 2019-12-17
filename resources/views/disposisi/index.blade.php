@extends('layout.app')
@section('title', 'Surat Disposisi')
@section('content_title', 'Surat Disposisi')
@section('content')
<div class="container-fluid">
    <div class="row">=
        <div class="col-12 mt-2">
            <div class="table-responsive">
                <table class="table table-hover" id="tabelDisposisi">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Kepada</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($disposisi as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->no_surat }}</td>
                            <td>{{ $d->kepada }}</td>
                            <td>
                                @if ($d->status == 0)
                                Belum Dibaca
                                @elseif ($d->status == 1)
                                Sudah Dibaca
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('disposisi.show', ['disposisi' => $d->id]) }}" class="btn btn-link">
                                    <i class="fas fa-eye"></i> Lihat Data
                                </a>
                                <a href="{{ route('disposisi.edit', ['disposisi' => $d->id]) }}" class="btn btn-link">
                                    <i class="fas fa-edit"></i> Ubah Data
                                </a>
                                <form action="{{ route('disposisi.destroy', ['disposisi' => $d->id]) }}" method="post">
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
        $("#tabelDisposisi").DataTable();
    });
</script>
@endsection