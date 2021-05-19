<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backends\{
    Skema\Index as SkemaIndex,
    Skema\Create as SkemaCreate,
    Skema\Edit as SkemaEdit,
    Skema\Detail as SkemaDetail,
    Periodeskema\Index as PeriodeSkemaIndex,
    Periodeskema\Create as PeriodeSkemaCreate,
    Periodeskema\Edit as PeriodeSkemaEdit,
    PertanyaanSkema\Create as PertanyaanSkemaCreate,
    PertanyaanSkema\Edit as PertanyaanSkemaEdit,
};

Route::get('skema-penelitian',SkemaIndex::class)->name('skema_penelitian.index');
Route::get('skema-penelitian/create',SkemaCreate::class)->name('skema_penelitian.create');
Route::get('skema-penelitian/{skema_penelitian}/edit',SkemaEdit::class)->name('skema_penelitian.edit');
Route::get('skema-penelitian/{skema_penelitian}/detail',SkemaDetail::class)->name('skema_penelitian.detail');

Route::get('skema-penelitian-periode',PeriodeSkemaIndex::class)->name('periode_skema_penelitian.index');
Route::get('skema-penelitian-periode/{skema_penelitian}/create',PeriodeSkemaCreate::class)->name('periode_skema_penelitian.create');
Route::get('skema-penelitian-periode/{skema_penelitian_periode}/edit',PeriodeSkemaEdit::class)->name('periode_skema_penelitian.edit');

Route::get('skema-penelitian-question/{skema_penelitian}/create',PertanyaanSkemaCreate::class)->name('pertanyaan_skema.create');
Route::get('skema-penelitian-question/{skema_penelitian_question}/edit',PertanyaanSkemaEdit::class)->name('pertanyaan_skema.edit');
