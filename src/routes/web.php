<?php

use Illuminate\Support\Facades\Route;
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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get(
    '/pylon',
    function () {
        return view('main_page');
    }
)->name('main_page');

Route::get('/filelist', [FiledataController::class, 'getFileList']);

Route::get('/makefile', [FiledataController::class, 'edit_make_file']);

Route::post('/makefile', [FiledataController::class, 'save'])->name('save');

Route::get(
    '/dashboard',
    function () {
        return view('dashboard');
    }
)->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
