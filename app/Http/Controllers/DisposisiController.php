<?php

namespace App\Http\Controllers;

use App\Disposisi;
use App\SuratMasuk;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{

    public function index()
    {
        $disposisi = Disposisi::All();
        $suratMasuk = SuratMasuk::All();
        return view('disposisi.index')->with(['disposisi' => $disposisi, 'suratMasuk' => $suratMasuk]);
    }

    public function create()
    {
        $suratMasuk = SuratMasuk::All();
        return view('disposisi.create')->with('suratMasuk', $suratMasuk);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_surat' => 'required|string',
            'kepada' => 'required|string',
            'status' => 'required|string',
            'tanggapan' => 'required|string',
        ]);
        $disposisi = $request->except('_token');
        $store = Disposisi::create($disposisi);
        return redirect()->route('disposisi.index');
    }

    public function show(Disposisi $disposisi)
    {
        return view('disposisi.show')->with('disposisi', $disposisi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Disposisi $disposisi)
    {
        return view('disposisi.edit')->with('disposisi', $disposisi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disposisi $disposisi)
    {
        $this->validate($request, [
            'no_surat' => 'required|string',
            'kepada' => 'required|string',
            'status' => 'required|string',
            'tanggapan' => 'required|string',
        ]);
        $update = $request->except(['_token', 'method']);
        $disposisi->update($update);
        return redirect()->route('disposisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disposisi $disposisi)
    {
        $disposisi->delete();
        return redirect()->route('disposisi.index');
    }
}
