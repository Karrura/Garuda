<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriPerizinanController;
use App\Http\Controllers\KategoriExportirController;
use App\Http\Controllers\KategoriEduController;
use App\Http\Controllers\ArtikelPerizinanController;
use App\Http\Controllers\ArtikelExportirController;
use App\Http\Controllers\ArtikelEduController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\LoginController;

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

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/login', [LoginController::class, 'index'])->middleware('belumlogin');
Route::post('/login-proses', [LoginController::class, 'login']);
Route::group(['middleware' => 'sudahlogin'], function(){
	Route::get('/', function () {
	    return view('back.layout.master');
	});

	// CONFIG
	Route::get('config', [ConfigController::class, 'index']);
	Route::put('config-update', [ConfigController::class, 'update']);

	// MARKETPLACE
	Route::get('marketplace', [MarketplaceController::class, 'index']);
	Route::post('marketplace-proses', [MarketplaceController::class, 'store']);
	Route::put('marketplace-ubah', [MarketplaceController::class, 'update']);
	Route::get('marketplace-delete/{id}', [MarketplaceController::class, 'delete']);

	// PRODUK
	Route::get('produk', [ProdukController::class, 'index']);
	Route::post('produk-proses', [ProdukController::class, 'store']);
	Route::get('produk-delete/{id}', [ProdukController::class, 'delete']);

	// PERIZINAN
	Route::get('perizinan-kategori', [KategoriPerizinanController::class, 'index']);
	Route::post('perizinan-kategori-proses', [KategoriPerizinanController::class, 'store']);
	Route::get('perizinan-kategori-delete/{id}', [KategoriPerizinanController::class, 'delete']);
	Route::get('perizinan-artikel', [ArtikelPerizinanController::class, 'index']);
	Route::post('perizinan-artikel-proses', [ArtikelPerizinanController::class, 'store']);
	Route::get('perizinan-artikel-delete/{id}', [ArtikelPerizinanController::class, 'delete']);
	Route::get('perizinan-artikel-create', [ArtikelPerizinanController::class, 'create']);

	// EXPORTIR
	Route::get('exportir-kategori', [KategoriExportirController::class, 'index']);
	Route::post('exportir-kategori-proses', [KategoriExportirController::class, 'store']);
	Route::get('exportir-kategori-delete/{id}', [KategoriExportirController::class, 'delete']);
	Route::get('exportir-artikel', [ArtikelExportirController::class, 'index']);
	Route::post('exportir-artikel-proses', [ArtikelExportirController::class, 'store']);
	Route::get('exportir-artikel-delete/{id}', [ArtikelExportirController::class, 'delete']);
	Route::get('exportir-artikel-create', [ArtikelExportirController::class, 'create']);

	// VIDEOEDIU
	Route::get('videoedu-kategori', [KategoriEduController::class, 'index']);
	Route::post('videoedu-kategori-proses', [KategoriEduController::class, 'store']);
	Route::get('videoedu-kategori-delete/{id}', [KategoriEduController::class, 'delete']);
	Route::get('videoedu-artikel', [ArtikelEduController::class, 'index']);
	Route::post('videoedu-artikel-proses', [ArtikelEduController::class, 'store']);
	Route::get('videoedu-artikel-delete/{id}', [ArtikelEduController::class, 'delete']);
	Route::get('videoedu-artikel-create', [ArtikelEduController::class, 'create']);

	// LOGOU
	Route::get('logout', [LoginController::class, 'logout']);
});