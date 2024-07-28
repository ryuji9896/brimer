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
Route::get('/map', [FrontController::class, 'mapSelect'])->name('map');
Route::get('/map/site', [FrontController::class, 'siteSelect'])->name('site');

Route::get('/map/mapView', [FrontController::class, 'mapView'])->name('mapView');
Route::get('/map/mapPost', [FrontController::class, 'mapPost'])->name('mapPost');
Route::get('/map/siteView', [FrontController::class, 'siteView'])->name('siteView');
Route::get('/map/sitePost', [FrontController::class, 'sitePost'])->name('sitePost');

use App\Http\Controllers\MypageController;

Auth::routes();
Route::get('/mypage', [MypageController::class, 'mypage'])->name('mypage')->middleware('auth');


use App\Http\Controllers\LineupController;

Auth::routes();
Route::get('/lineup_create', [LineupController::class, 'lineupAdd'])->name('create')->middleware('auth');
Route::post('/lineup_create', [LineupController::class, 'lineupCreate'])->name('post')->middleware('auth');
Route::get('/lineup_edit', [LineupController::class, 'lineupEdit'])->name('edit')->middleware('auth');

Route::get('/lineup', [LineupController::class, 'lineup'])->name('view');

use App\Http\Controllers\DBcreateController;

Route::get('/DBcreate_index', [DBcreateController::class, 'DBIndex'])->name('DBIndex');

Route::get('/DBcreate_map', [DBcreateController::class, 'mapAdd'])->name('DBmapView');
Route::post('/DBcreate_map', [DBcreateController::class, 'mapCreate'])->name('DBmapCreate');

Route::get('/DBedit_map', [DBcreateController::class, 'mapEdit'])->name('DBmapEdit');
Route::post('/DBedit_map', [DBcreateController::class, 'mapUpdate'])->name('DBmapUpdate');

Route::get('/DBcreate_map_delete', [DBcreateController::class, 'mapDelete'])->name('DBmapDelete');

Route::get('/DBcreate_site', [DBcreateController::class, 'siteAdd'])->name('DBsiteView');
Route::post('/DBcreate_site', [DBcreateController::class, 'siteCreate'])->name('DBsiteCreate');

Route::get('/DBedit_site', [DBcreateController::class, 'siteEdit'])->name('DBsiteEdit');
Route::post('/DBedit_site', [DBcreateController::class, 'siteUpdate'])->name('DBsiteUpdate');

Route::get('/DBcreate_site_delete', [DBcreateController::class, 'siteDelete'])->name('DBsiteDelete');


    
/*homeはサイトで閲覧、投稿するためには不要だがログイン機能やDB用のマップ、サイトデーターを入力するために残してある*/
