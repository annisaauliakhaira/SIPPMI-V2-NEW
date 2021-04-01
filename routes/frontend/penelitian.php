<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontends\{
    Penelitian\Index as PenelitianIndex,
    Penelitian\Create as PenelitianCreate,
    Penelitian\Edit as PenelitianEdit,
};
// Route::resource('penelitians', \App\Http\Controllers\Backend\PenelitianController::class);

Route::get('penelitians/index', PenelitianIndex::class)->name('penelitian.index');
Route::get('penelitians/create', PenelitianCreate::class)->name('penelitian.create');
Route::get('penelitians/edit', PenelitianEdit::class)->name('penelitian.edit');

