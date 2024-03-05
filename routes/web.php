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
Route::get('/mypage', [MypageController::class, 'mypage'])->name('mypage');

use App\Http\Controllers\LineupController;
Route::get('/lineup_create', [LineupController::class, 'create'])->name('create');
Route::get('/lineup_edit', [LineupController::class, 'edit'])->name('edit');
Route::get('/lineup', [LineupController::class, 'lineup'])->name('lineup');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
