<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listbookController;

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

// Route::get('/', function () {
//     return view('listbook');
// });
Route::get('/', [listbookController::class, 'index'])->name('listbook.index');
Route::get('/search', [listbookController::class, 'search'])->name('listbook.search');
Route::get('/topten', [listbookController::class, 'ten'])->name('listbook.ten');
