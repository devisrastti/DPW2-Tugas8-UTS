<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

// admin
Route::get('dashboard', [ArtikelController::class, 'dashboard']);

// 
// 
// artikel
Route::get('admin/artikel', [ArtikelController::class, 'index']);
Route::get('admin/artikel/create', [ArtikelController::class, 'create']);
Route::post('admin/artikel', [ArtikelController::class, 'store']);
Route::get('admin/artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('admin/artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('admin/artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('admin/artikel/{artikel}', [ArtikelController::class, 'destroy']);

// 
// 
// Komentar
Route::get('admin/komen', [KomenController::class, 'index']);
Route::get('admin/komen/create', [KomenController::class, 'create']);
Route::post('admin/komen', [KomenController::class, 'store']);
Route::get('admin/komen/{komen}', [KomenController::class, 'show']);
Route::get('admin/komen/{komen}/edit', [KomenController::class, 'edit']);
Route::put('admin/komen/{komen}', [KomenController::class, 'update']);
Route::delete('admin/komen/{komen}', [KomenController::class, 'destroy']);
// 
// 
// user
Route::get('admin/user', [UserController::class, 'index']);
Route::get('admin/user/create', [UserController::class, 'create']);
Route::post('admin/user', [UserController::class, 'store']);
Route::get('admin/user/{user}/edit', [UserController::class, 'edit']);
Route::put('admin/user/{user}', [UserController::class, 'update']);
Route::delete('admin/user/{user}', [UserController::class, 'destroy']);


// login / logout
Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class,'loginProcess']);
Route::get('logout', [AuthController::class,'logout']);





// user
Route::get('/', [HomeController::class, 'user']);

Route::get('artikel', [HomeController::class, 'artikel']);
Route::get('artikel/{artikel}', [HomeController::class, 'artikel_show']);




Route::get('kontak', [HomeController::class, 'kontak']);
/*
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('produk', ProdukController::class);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);
    Route::resource('promo', PromoController::class);
});


contoh crud yg lama:
Route::get('produk', [ProdukController::class, 'index']); //mendefinisikan link, lalu di arahkan ke controller yg menampilkan view.produk.index
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']); //dari view(create)lalu ke routes dan mengarah ke Produk Controller
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

*/