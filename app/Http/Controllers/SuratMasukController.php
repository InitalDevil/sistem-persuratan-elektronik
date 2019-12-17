<?php

namespace App\Http\Controllers;

use App\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class SuratMasukController extends Controller
{

    public function index()
    {
        $suratMasuk = SuratMasuk::All();
        return view('surat-masuk.index')->with('suratMasuk', $suratMasuk);
    }

    public function create()
    {
        return View::make('surat-masuk.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_agenda' => 'required|string',
            'user_id' => 'required|numeric',
            'jenis_surat' => 'required|string',
            'no_surat' => 'required|string',
            'pengirim' => 'required|string',
            'perihal' => 'required|string',
            'tgl_kirim' => 'required|date',
            'tgl_terima' => 'required|date',
        ]);
        $suratMasuk = $request->except('_token');
        $store = SuratMasuk::create($suratMasuk);
        DB::beginTransaction();
        try {
            DB::select('call add_disposisi(?)', [
                $store->no_surat
            ]);
            DB::commit();
            return redirect()->route('surat-masuk.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function show(SuratMasuk $suratMasuk)
    {
        $suratMasuk = $suratMasuk->with('user')->get();
        return view('surat-masuk.show')->with('suratMasuk', $suratMasuk);
    }

    public function edit(SuratMasuk $suratMasuk)
    {
        return view('surat-masuk.edit')->with('suratMasuk', $suratMasuk);
    }

    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        $this->validate($request, [
            'no_agenda' => 'required|string',
            'user_id' => 'required|numeric',
            'jenis_surat' => 'required|string',
            'no_surat' => 'required|string',
            'pengirim' => 'required|string',
            'perihal' => 'required|string',
            'tgl_kirim' => 'required',
            'tgl_terima' => 'required',
        ]);
        $update = $request->except(['_token', 'method']);
        $suratMasuk->update($update);
        return redirect()->route('surat-masuk.index');
    }

    public function destroy(SuratMasuk $suratMasuk)
    {
        $suratMasuk->delete();
        return redirect()->route('surat-masuk.index');
    }
}
