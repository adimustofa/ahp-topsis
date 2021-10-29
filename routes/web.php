<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataJalanController;
use App\Http\Controllers\DataSurveyController;
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
Route::middleware(['auth', 'verified'])->get('/datasurvey', [DataSurveyController::class,'index']);
Route::middleware(['auth', 'verified'])->get('/editjalan/{id}', [DataJalanController::class,'edit']);
Route::middleware(['auth', 'verified'])->get('/editsurvey/{id}', [DataSurveyController::class,'edit']);
Route::post('/simpandata', [DataJalanController::class,'insert']);
Route::post('/simpandatasurvey', [DataSurveyController::class,'insert']);
Route::post('/updatedatajalan/{id}', [DataJalanController::class,'submiteditjalan']);
Route::post('/updatedatasurvey/{id}', [DataSurveyController::class,'submiteditsurvey']);
Route::middleware(['auth', 'verified'])->get('/hapusdatajalan/{id}', [DataJalanController::class,'deletejalan']);
Route::middleware(['auth', 'verified'])->get('/hapusdatasurvey/{id}', [DataSurveyController::class,'deletesurvey']);


require __DIR__.'/auth.php';
