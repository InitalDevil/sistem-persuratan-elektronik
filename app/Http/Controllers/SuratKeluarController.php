<?php

namespace App\Http\Controllers;

use App\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar = SuratKeluar::All();
        return view('surat-keluar.index')->with('suratKeluar', $suratKeluar);
    }

    public function create()
    {
        return view('surat-keluar.create');
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
            'tgl_kirim' => 'required',
        ]);
        $suratKeluar = $request->except('_token');
        $store = SuratKeluar::create($suratKeluar);
        return redirect()->route('surat-keluar.index');
    }

    public function show(SuratKeluar $suratKeluar)
    {
        $suratKeluar = $suratKeluar->with('user')->get();
        return view('surat-keluar.show')->with('suratKeluar', $suratKeluar);
    }

    public function edit(SuratKeluar $suratKeluar)
    {
        return view('surat-keluar.edit')->with('suratKeluar', $suratKeluar);
    }

    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        $this->validate($request, [
            'no_agenda' => 'required|string',
            'user_id' => 'required|numeric',
            'jenis_surat' => 'required|string',
            'no_surat' => 'required|string',
            'pengirim' => 'required|string',
            'perihal' => 'required|string',
            'tgl_kirim' => 'required',
        ]);
        $update = $request->except(['_token', 'method']);
        $suratKeluar->update($update);
        return redirect()->route('surat-keluar.index');
    }

    public function destroy(SuratKeluar $suratKeluar)
    {
        $suratKeluar->delete();
        return redirect()->route('surat-keluar.index');
    }
}
