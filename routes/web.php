<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('surat-masuk', 'SuratMasukController');

Route::resource('surat-keluar', 'SuratKeluarController');
