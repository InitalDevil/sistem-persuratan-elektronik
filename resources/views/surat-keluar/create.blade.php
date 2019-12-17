@extends('layout.app')
@section('title', 'Tambah Surat Keluar')
@section('content_title', 'Tambah Surat Keluar')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="{{ route('surat-keluar.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="noAgenda">Nomor Agenda</label>
                    <input type="text" class="form-control" name="no_agenda">
                </div>
                <div class="form-group">
                    <label for="noSurat">Nomor Surat</label>
                    <input type="text" class="form-control" name="no_surat">
                </div>
                <div class="form-group">
                    <label for="pengirim">Pengirim</label>
                    <input type="text" class="form-control" name="pengirim">
                </div>
                <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input type="text" class="form-control" name="perihal">
                </div>
                <div class="form-group">
                    <label for="jenisSurat">Jenis Surat</label>
                    <select name="jenis_surat" id="jenis_surat" class="form-control">
                        <option value="Dinas">Dinas</option>
                        <option value="Non Dinas">Non Dinas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tglKirim">Tanggal Kirim</label>
                    <input type="text" class="form-control" name="tgl_kirim" placeholder="yyyy-mm-dd">
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#jenis_surat').select2();
    });
</script>
@endsection