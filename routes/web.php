<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataJalanController;
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
    return view('welcome');
});

Route::get('/dashboard1', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::middleware(['auth', 'verified'])->get('/dashboard', [DashboardController::class,'index']);
Route::middleware(['auth', 'verified'])->get('/datajalan', [DataJalanController::class,'index']);


require __DIR__.'/auth.php';