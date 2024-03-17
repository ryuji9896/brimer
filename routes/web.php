<?php

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

use App\Http\Controllers\FrontController;
Route::get('/', [FrontController::class, 'index'])->name('top');
Route::get('/map', [FrontController::class, 'map_select'])->name('map');
Route::get('/map/site', [FrontController::class, 'site_select'])->name('site');


use App\Http\Controllers\MypageController;

Auth::routes();
Route::get('/mypage', [MypageController::class, 'mypage'])->name('mypage')->middleware('auth');


use App\Http\Controllers\LineupController;

Auth::routes();
Route::get('/lineup_create', [LineupController::class, 'index_create'])->name('view_create')->middleware('auth');
Route::post('/lineup_create', [LineupController::class, 'create'])->name('post_create');

Route::get('/lineup_edit', [LineupController::class, 'index_edit'])->name('view_edit')->middleware('auth');
Route::post('/lineup_edit', [LineupController::class, 'edit'])->name('post_edit');

Route::get('/lineup', [LineupController::class, 'lineup'])->name('lineup');

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
///homeは本来サイトでは不要だがログイン機能やDB用のマップ、サイトデーターを入力するために残してある

Route::post('map_site_data', [LineuupController::class. 'DBmap_create'])->name('DBmap_create');
Route::post('map_site_data', [LineuupController::class. 'DBsite_create'])->name('DBsite_create');
    