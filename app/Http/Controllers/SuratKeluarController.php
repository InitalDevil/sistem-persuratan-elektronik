<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratKeluarRequest;
use App\SuratKeluar;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar = SuratKeluar::All();
    }

    public function create()
    {
        //
    }

    public function store(SuratKeluarRequest $request)
    {
        $suratKeluar = $request->except('_token');
        $store = SuratKeluar::create($suratKeluar);
    }

    public function show(SuratKeluar $suratKeluar)
    { }

    public function edit(SuratKeluar $suratKeluar)
    { }

    public function update(SuratKeluarRequest $request, SuratKeluar $suratKeluar)
    {
        $update = $request->except(['_token', 'method']);
        $suratKeluar->update($update);
    }

    public function destroy(SuratKeluar $suratKeluar)
    {
        $suratKeluar->delete();
    }
}
