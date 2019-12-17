<?php

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('surat-masuk', 'SuratMasukController');
    Route::resource('surat-keluar', 'SuratKeluarController');
    Route::resource('disposisi', 'DisposisiController');
    Route::resource('petugas', 'PetugasController')->except(['show', 'edit', 'update']);
});
