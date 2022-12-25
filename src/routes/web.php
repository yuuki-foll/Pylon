<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\FiledataController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get(
    '/pylon',
    function () {
        return view('main_page');
    }
)->name('main_page');

Route::get('/filelist', [FiledataController::class, 'getFileList'])
    ->middleware(['auth', 'verified'])->name('fileList');

Route::get('/makefile', [FiledataController::class, 'editMakeFile'])
    ->middleware(['auth', 'verified'])->name('makeFile');

Route::post('/makefile', [FiledataController::class, 'save'])->name('save');

Route::get('/updatefile/{id}', [FiledataController::class, 'updateFile'])->name('editFile');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
