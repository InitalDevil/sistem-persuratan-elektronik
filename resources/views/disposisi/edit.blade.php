@extends('layout.app')
@section('title', 'Ubah Surat Masuk')
@section('content_title', 'Ubah Surat Masuk')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="{{ route('disposisi.update', ['disposisi' => $disposisi->id]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="noSurat">Nomor Surat</label>
                    <input type="text" class="form-control" name="no_surat" value="{{ $disposisi->no_surat }}">
                </div>
                <div class="form-group">
                    <label for="kepada">Kepada</label>
                    <input type="text" class="form-control" name="kepada" value="{{ $disposisi->kepada }}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="{{ $disposisi->keterangan }}">
                </div>
                <div class="form-group">
                    <label for="tanggapan">Tanggapan</label>
                    <input type="text" class="form-control" name="tanggapan" value="{{ $disposisi->tanggapan }}">
                </div>
                <input type="hidden" name="status" value="1">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection