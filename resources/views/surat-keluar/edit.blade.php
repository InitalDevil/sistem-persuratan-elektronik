@extends('layout.app')
@section('title', 'Ubah Surat Keluar')
@section('content_title', 'Ubah Surat Keluar')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="{{ route('surat-keluar.update', ['surat_keluar' => $suratKeluar->no_surat]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="noAgenda">Nomor Agenda</label>
                    <input type="text" class="form-control" name="no_agenda" value="{{ $suratKeluar->no_agenda }}">
                </div>
                <div class="form-group">
                    <label for="noSurat">Nomor Surat</label>
                    <input type="text" class="form-control" name="no_surat" value="{{ $suratKeluar->no_surat }}">
                </div>
                <div class="form-group">
                    <label for="pengirim">Pengirim</label>
                    <input type="text" class="form-control" name="pengirim" value="{{ $suratKeluar->pengirim }}">
                </div>
                <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input type="text" class="form-control" name="perihal" value="{{ $suratKeluar->perihal }}">
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
                    <input type="text" class="form-control" name="tgl_kirim" placeholder="yyyy-mm-dd" value="{{ $suratKeluar->tgl_kirim }}">
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