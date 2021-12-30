<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/coming-soon', function () {
  return view('errors.comingsoon');
});

Route::prefix('webinar')->group(function () {
  Route::get('/', [PagesController::class, 'webinar_info']);
  Route::get('/registrasi', [PagesController::class, 'webinar_regis']);
});

Route::prefix('msm')->group(function () {
  Route::get('/', [PagesController::class, 'msm_info']);
  Route::get('/registrasi', [PagesController::class, 'msm_regis']);
});

Route::prefix('pameran')->group(function () {
  Route::get('/', [PagesController::class, 'pameran_info']);
  Route::get('/info', [PagesController::class, 'pameran_detail']);
  Route::get('/registrasi', [PagesController::class, 'pameran_regis']);
});

Route::prefix('exhibitor')->group(function () {
  Route::get('/', [PagesController::class, 'exhibitor_info']);
  Route::get('/registrasi', [PagesController::class, 'exhibitor_regis']);
});

Route::prefix('food-and-beverage')->group(function () {
  Route::get('/', [PagesController::class, 'fnb_info']);
  Route::get('/registrasi', [PagesController::class, 'fnb_regis']);
});

Route::fallback(function () {
  return view('errors.404');
});
