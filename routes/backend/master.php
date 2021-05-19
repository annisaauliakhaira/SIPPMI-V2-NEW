<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backends\{
    Role\Index as RoleIndex,
    Role\Create as RoleCreate,
    Role\Edit as RoleEdit,
    Permissions\Index as PermissionIndex,
    Permissions\Create as PermissionCreate,
    Permissions\Edit as PermissionEdit,
    Dosen\Index as DosenIndex,
    Dosen\Create as DosenCreate,
    Dosen\Edit as DosenEdit,
    Fakultas\Index as FakultasIndex,
    Fakultas\Create as FakultasCreate,
    Fakultas\Edit as FakultasEdit,
    Prodi\Index as ProdiIndex,
    Prodi\Create as ProdiCreate,
    Prodi\Edit as ProdiEdit,
    Skema\Index as SkemaIndex,
    Reviewer\Index as ReviewerIndex,
    Reviewer\Create as ReviewerCreate,
};

// Route::resource('permissions', \App\Http\Controllers\Backend\PermissionController::class);
Route::get('permissions/index', PermissionIndex::class)->name('permissions.index');
Route::get('permissions/create', PermissionCreate::class)->name('permissions.create');
Route::get('permissions/{permissions}/edit', PermissionEdit::class)->name('permissions.edit');
Route::get('roles', RoleIndex::class)->name('roles.index');
Route::get('roles/create', RoleCreate::class)->name('roles.create');
Route::get('roles/{role}/edit', RoleEdit::class)->name('roles.edit');
// dosen
Route::get('dosen',DosenIndex::class)->name('dosen.index');
Route::get('dosen/create',DosenCreate::class)->name('dosen.create');
Route::get('dosen/{dosen}/edit',DosenEdit::class)->name('dosen.edit');
// fakultas
Route::get('fakultas',FakultasIndex::class)->name('fakultas.index');
Route::get('fakultas/create',FakultasCreate::class)->name('fakultas.create');
Route::get('fakultas/{faculty}/edit',FakultasEdit::class)->name('fakultas.edit');
// Prodi
Route::get('prodi',ProdiIndex::class)->name('prodi.index');
Route::get('prodi/create',ProdiCreate::class)->name('prodi.create');
Route::get('prodi/{department}/edit',ProdiEdit::class)->name('prodi.edit');
// Reviewer
Route::get('reviewer',ReviewerIndex::class)->name('reviewer.index');
Route::get('reviewer/create',ReviewerCreate::class)->name('reviewer.create');

