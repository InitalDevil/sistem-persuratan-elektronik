<?php

namespace App\Http\Controllers;

use App\SuratMasuk;
use App\Http\Requests\SuratMasukRequest;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{

    public function index()
    {
        $suratMasuk = SuratMasuk::All();
    }

    public function create()
    {
    }

    public function store(SuratMasukRequest $request)
    {
        $suratMasuk = $request->except('_token');
        $store = SuratMasuk::create($suratMasuk);
    }

    public function show(SuratMasuk $suratMasuk)
    {
    }

    public function edit(SuratMasuk $suratMasuk)
    {
    }

    public function update(SuratMasukRequest $request, SuratMasuk $suratMasuk)
    {
        $update = $request->except(['_token', 'method']);
        $suratMasuk->update($update);
    }

    public function destroy(Request $request, SuratMasuk $suratMasuk)
    {
        if (!$request->method == 'delete') {
        }
        $suratMasuk->delete();
    }
}
