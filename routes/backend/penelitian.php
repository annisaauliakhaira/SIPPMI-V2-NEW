<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backends\{
    Penelitian\Index as PenelitianIndex,
    Penelitian\Detail as PenelitianDetail,
    Penelitian\Tambah\Informasidasar as TambahInformasiDasar,
    Penelitian\Tambah\Ringkasan as TambahRingkasan,
    Penelitian\Tambah\Anggaranbiaya as TambahAnggaranBiaya,
    Penelitian\Tambah\Peneliti as TambahPeneliti,
    Penelitian\Tambah\Review as ReviewPenelitian,
};

Route::prefix('penelitians')->group(function(){
    Route::get('/index', PenelitianIndex::class)->name('penelitian.index');
    Route::get('/detail/{penelitian}', PenelitianDetail::class)->name('penelitian.detail');
    Route::get('/create/informasi-dasar/{penelitian?}',TambahInformasiDasar::class)->name('penelitian.create.informasi-dasar');
    Route::get('/create/ringkasan/{penelitian}',TambahRingkasan::class)->name('penelitian.create.ringkasan');
    Route::get('/create/peneliti/{penelitian}',TambahPeneliti::class)->name('penelitian.create.peneliti');
    Route::get('/create/anggaran-biaya/{penelitian}',TambahAnggaranBiaya::class)->name('penelitian.create.anggaran-biaya');
    Route::get('/create/review-penelitian/{penelitian}',ReviewPenelitian::class)->name('penelitian.create.review-penelitian');
});
