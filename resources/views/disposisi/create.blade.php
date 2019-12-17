@extends('layout.app')
@section('title', 'Tambah Surat Disposisi')
@section('content_title', 'Tambah Surat Disposisi')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="{{ route('disposisi.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="noSurat">Nomor Surat</label>
                    <input type="text" class="form-control" name="no_surat">
                </div>
                <div class="form-group">
                    <label for="kepada">Kepada</label>
                    <input type="text" class="form-control" name="kepada">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan">
                </div>
                <div class="form-group">
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="0"> Belum Dibaca
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="1"> Sudah Dibaca
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggapan">Tanggapan</label>
                    <input type="text" class="form-control" name="tanggapan">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection