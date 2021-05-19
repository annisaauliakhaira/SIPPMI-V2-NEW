<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontends\{
    Penelitian\Review\Index as ReviewPenelitianIndex,
    Penelitian\Review\Edit as ReviewPenelitianEdit,
};
// Route::resource('penelitians', \App\Http\Controllers\Backend\PenelitianController::class);

Route::prefix('review-penelitian')->group(function(){
    Route::get('/index', ReviewPenelitianIndex::class)->name('review_penelitian.index');
    Route::get('/', ReviewPenelitianIndex::class)->name('review_penelitian.index');
    Route::get('/edit', ReviewPenelitianEdit::class)->name('review_penelitian.edit');
    
});


