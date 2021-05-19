<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('profile/history', [ProfileController::class, 'history'])->name('profile.history');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('password', [PasswordController::class, 'edit'])->name('password-edit');
    Route::put('password', [PasswordController::class, 'update'])->name('password-update');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'backend.'], function(){

    require (__DIR__. '/backend/master.php');
    require (__DIR__. '/backend/penelitian.php');
    require (__DIR__. '/backend/skema.php');
    require (__DIR__. '/backend/output.php');

});

Route::group(['middleware' => 'auth', 'prefix' => 'dosen', 'as' => 'frontend.'], function (){

    require (__DIR__. '/frontend/penelitian.php');
    require (__DIR__. '/frontend/pengabdian.php');
    require (__DIR__. '/frontend/review_penelitian.php');

});
