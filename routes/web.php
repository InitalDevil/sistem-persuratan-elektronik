<?php

Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('surat-masuk', 'SuratMasukController');

Route::resource('surat-keluar', 'SuratKeluarController');
