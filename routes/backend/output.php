<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backends\{
    Jenisoutput\Index as JenisoutputIndex,
    Jenisoutput\Create as JenisoutputCreate,
    Jenisoutput\Edit as JenisoutputEdit,
};

Route::get("jenis-output",JenisoutputIndex::class)->name("jenis_output.index");
Route::get("jenis-output/create",JenisoutputCreate::class)->name("jenis_output.create");
Route::get("jenis-output/{jenis_output}/edit",JenisoutputEdit::class)->name("jenis_output.edit");
