<?php

namespace App\Http\Controllers;

use App\Disposisi;
use App\SuratKeluar;
use App\ViewMasuk;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $suratMasuk = ViewMasuk::All();
        $suratKeluar = SuratKeluar::whereDate('created_at', Carbon::now())->with('user')->get();
        $disposisi = Disposisi::whereDate('created_at', Carbon::now())->with('suratMasuk')->get();
        return view('dashboard')->with(['suratMasuk' => $suratMasuk, 'suratKeluar' => $suratKeluar, 'disposisi' => $disposisi]);
    }
}
