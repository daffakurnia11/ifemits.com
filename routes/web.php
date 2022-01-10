<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\Admin\Exh_exhibitorController;
use App\Http\Controllers\Admin\Exh_guestController;
use App\Http\Controllers\Admin\Exh_sellerController;
use App\Http\Controllers\Admin\ShortlinkController;
use App\Http\Controllers\Admin\WebinarController;
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

Route::middleware('visited')->group(function () {
  Route::get('/', [PagesController::class, 'index']);
  Route::get('/about', [PagesController::class, 'about']);
  Route::get('/coming-soon', function () {
    return view('errors.comingsoon');
  });

  Route::prefix('if-web')->group(function () {
    Route::get('/', [PagesController::class, 'webinar_info']);
    Route::get('/registrasi', [WebinarController::class, 'create']);
    Route::post('/registrasi', [WebinarController::class, 'store']);
  });

  Route::prefix('msm')->group(function () {
    Route::get('/', [PagesController::class, 'msm_info']);
    Route::get('/registrasi', [CompetitionController::class, 'create']);
    Route::post('/registrasi', [CompetitionController::class, 'store']);
  });

  Route::prefix('iecc')->group(function () {
    Route::get('/', [PagesController::class, 'pameran_info']);
    Route::get('/info', [PagesController::class, 'pameran_detail']);
    Route::get('/registrasi', [Exh_guestController::class, 'create']);
    Route::post('/registrasi', [Exh_guestController::class, 'store']);
    Route::prefix('exhibitor')->group(function () {
      Route::get('/', [PagesController::class, 'exhibitor_info']);
      Route::get('/registrasi', [Exh_exhibitorController::class, 'create']);
      Route::post('/registrasi', [Exh_exhibitorController::class, 'store']);
    });

    Route::prefix('food-and-beverage')->group(function () {
      Route::get('/', [PagesController::class, 'fnb_info']);
      Route::get('/registrasi', [Exh_sellerController::class, 'create']);
      Route::post('/registrasi', [Exh_sellerController::class, 'store']);
    });
  });
});

// Admin Routing
Route::get('/login', [AdminController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminController::class, 'authentication']);
Route::post('/logout', [AdminController::class, 'logout']);

Route::prefix('admin')->middleware('auth')->group(function () {
  Route::get('/', [AdminController::class, 'index']);
  Route::resource('shortlink', ShortlinkController::class);
  Route::resource('if-web', WebinarController::class)->parameters([
    'if-web'  => 'webinar'
  ])->except(['create', 'store', 'edit', 'update']);
  Route::resource('msm', CompetitionController::class)->parameters([
    'msm', 'competition'
  ])->except(['create', 'store', 'edit', 'update']);
  Route::prefix('iecc')->group(function () {
    Route::resource('pengunjung', Exh_guestController::class)->parameter('pengunjung', 'exh_guest')->except(['store', 'edit', 'update', 'show']);
    Route::resource('exhibitor', Exh_exhibitorController::class)->parameter('exhibitor', 'exh_exhibitor')->except(['create', 'store', 'edit', 'update']);
    Route::resource('food-and-beverage', Exh_sellerController::class)->parameter('food-and-beverage', 'exh_seller')->except(['create', 'store', 'edit', 'update']);
  });
});

Route::get('/visitor_data', [AdminController::class, 'visitor_data']);

// FOR SHORT LINKS
Route::get('/{shortlink:short}', [ShortlinkController::class, 'show'])->middleware('visited');
Route::fallback(function () {
  return view('errors.404');
})->middleware('visited');
