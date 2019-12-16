<?php

namespace App\Http\Controllers;

use App\Disposisi;
use App\SuratKeluar;
use App\SuratMasuk;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function index()
    {
        $suratMasuk = SuratMasuk::whereDate('created_at', Carbon::now())->with(['users', 'jenis_surat'])->get();
        $suratKeluar = SuratKeluar::whereDate('created_at', Carbon::now())->with(['users', 'jenis_surat'])->get();
        $disposisi = Disposisi::whereDate('created_at', Carbon::now())->with(['surat_keluar', 'status_surat'])->get();
        if (request()->ajax()) {
            return View::make('dashboard')->with(['suratMasuk' => $suratMasuk, 'suratKeluar' => $suratKeluar, 'disposisi' => $disposisi])->renderSections()['content'];
        }
        return View::make('dashboard')->with(['suratMasuk' => $suratMasuk, 'suratKeluar' => $suratKeluar, 'disposisi' => $disposisi]);
    }
}
