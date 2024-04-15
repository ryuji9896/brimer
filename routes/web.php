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

use App\Http\Controllers\DBcreateController;

Route::get('/DBcreate_index', [DBcreateController::class, 'DBIndex'])->name('DBIndex');

Route::get('/DBcreate_map', [DBcreateController::class, 'mapAdd'])->name('mapView');
Route::post('/DBcreate_map', [DBcreateController::class, 'mapCreate'])->name('mapCreate');

Route::get('/DBedit_map', [DBcreateController::class, 'mapEdit'])->name('mapEdit');
Route::post('/DBedit_map', [DBcreateController::class, 'mapUpdate'])->name('mapUpdate');

Route::get('/DBcreate_map_delete', [DBcreateController::class, 'mapDelete'])->name('mapDelete');

Route::get('/DBcreate_site', [DBcreateController::class, 'siteAdd'])->name('siteView');
Route::post('/DBcreate_site', [DBcreateController::class, 'siteCreate'])->name('siteCreate');

Route::get('/DBedit_site', [DBcreateController::class, 'siteEdit'])->name('siteEdit');
Route::post('/DBedit_site', [DBcreateController::class, 'siteUpdate'])->name('siteUpdate');

Route::get('/DBcreate_site_delete', [DBcreateController::class, 'siteDelete'])->name('siteDelete');
    
/*homeはサイトで閲覧、投稿するためには不要だがログイン機能やDB用のマップ、サイトデーターを入力するために残してある*/
