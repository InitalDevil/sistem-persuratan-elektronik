@extends('layout.app')
@section('title', 'Ubah Surat Masuk')
@section('content_title', 'Ubah Surat Masuk')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="{{ route('surat-masuk.update', ['surat_masuk' => $suratMasuk->no_surat]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="noAgenda">Nomor Agenda</label>
                    <input type="text" class="form-control" name="no_agenda" value="{{ $suratMasuk->no_agenda }}">
                </div>
                <div class="form-group">
                    <label for="noSurat">Nomor Surat</label>
                    <input type="text" class="form-control" name="no_surat" value="{{ $suratMasuk->no_surat }}">
                </div>
                <div class="form-group">
                    <label for="pengirim">Pengirim</label>
                    <input type="text" class="form-control" name="pengirim" value="{{ $suratMasuk->pengirim }}">
                </div>
                <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input type="text" class="form-control" name="perihal" value="{{ $suratMasuk->perihal }}">
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
                    <input type="text" class="form-control" name="tgl_kirim" placeholder="yyyy-mm-dd"
                        value="{{ $suratMasuk->tgl_kirim }}">
                </div>
                <div class="form-group">
                    <label for="tglTerima">Tanggal Terima</label>
                    <input type="text" class="form-control" name="tgl_terima" placeholder="yyyy-mm-dd"
                        value="{{ $suratMasuk->tgl_terima }}">
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#jenis_surat').select2({
            theme: 'bootstrap4'
        });
    });
</script>
@endsection