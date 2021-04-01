<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backends\{
    Role\Index as RoleIndex,
    Role\Create as RoleCreate,
    Role\Edit as RoleEdit,
    Permissions\Index as PermissionIndex,
    Permissions\Create as PermissionCreate,
    Permissions\Edit as PermissionEdit

};

// Route::resource('permissions', \App\Http\Controllers\Backend\PermissionController::class);
Route::get('permissions/index', PermissionIndex::class)->name('permissions.index');
Route::get('permissions/create', PermissionCreate::class)->name('permissions.create');
Route::get('permissions/{permissions}/edit', PermissionEdit::class)->name('permissions.edit');
Route::get('roles', RoleIndex::class)->name('roles.index');
Route::get('roles/create', RoleCreate::class)->name('roles.create');
Route::get('roles/{role}/edit', RoleEdit::class)->name('roles.edit');
