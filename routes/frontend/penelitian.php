<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontends\{
    Penelitian\Index as PenelitianIndex,
    Penelitian\Output\Create as CreateOutput,
    Penelitian\Output\Index as IndexOutput,
    Penelitian\Output\Edit as EditOutput,
    Penelitian\Tambah\Informasidasar as TambahInformasiDasar,
    Penelitian\Tambah\Ringkasan as TambahRingkasan,
    Penelitian\Tambah\Anggaranbiaya as TambahAnggaranBiaya,
    Penelitian\Tambah\Peneliti as TambahPeneliti,
    Penelitian\Tambah\Review as ReviewPenelitian,
};
// Route::resource('penelitians', \App\Http\Controllers\Backend\PenelitianController::class);

Route::prefix('penelitians')->group(function(){
    Route::get('', PenelitianIndex::class)->name('penelitian.index');
    Route::get('{penelitian_output}/penelitian/{penelitian}/output/create', CreateOutput::class)->name('penelitian.create.output');
    Route::get('{penelitian_output}/penelitian/{penelitian}/output/edit', EditOutput::class)->name('penelitian.edit.output');
    Route::get('/{penelitian}/penelitian/output/index', IndexOutput::class)->name('penelitian.index.output');
    Route::get('/create/informasi-dasar/{penelitian?}',TambahInformasiDasar::class)->name('penelitian.create.informasi-dasar');
    Route::get('/{penelitian}/ringkasan/create',TambahRingkasan::class)->name('penelitian.create.ringkasan');
    Route::get('/{penelitian}/peneliti/create',TambahPeneliti::class)->name('penelitian.create.peneliti');
    Route::get('/{penelitian}/anggaran-biaya/create',TambahAnggaranBiaya::class)->name('penelitian.create.anggaran-biaya');
    Route::get('/{penelitian}/review-penelitian/create',ReviewPenelitian::class)->name('penelitian.create.review-penelitian');
});

