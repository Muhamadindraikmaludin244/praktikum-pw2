<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\JenisFaskesController;
use App\Http\Controllers\kabKotaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\LoginController;
use Illuminate\foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {

    Route::get('/kabkota', [kabKotaController::class, 'show'])->name('kabkota');
    Route::get('/kabkota/create', [kabKotaController::class, 'create'])->name('kabkota.create');
    Route::post('/kabkota/store', [kabKotaController::class, 'store'])->name('kabkota.store');
    Route::get('/kabkota/{id}/edit', [kabKotaController::class, 'edit'])->name('kabkota.edit');
    Route::put('/kabkota/{id}/update', [kabKotaController::class, 'update'])->name('kabkota.update');
    Route::delete('/kabkota/{id}', [kabKotaController::class, 'destroy'])->name('kabkota.destroy');
    Route::get('/kabkota/{id}', [kabKotaController::class, 'view'])->name('kabkota.view');

    Route::get('/kategori', [KategoriController::class, 'show'])->name('kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/{id}/update', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    Route::get('/kategori/{id}', [KategoriController::class, 'view'])->name('kategori.view');

    Route::get('/jenis_faskes', [JenisFaskesController::class, 'show'])->name('jenis_faskes');
    Route::get('/jenis_faskes/create', [JenisFaskesController::class, 'create'])->name('jenis_faskes.create');
    Route::post('/jenis_faskes/store', [JenisFaskesController::class, 'store'])->name('jenis_faskes.store');
    Route::get('/jenis_faskes/{id}/edit', [JenisFaskesController::class, 'edit'])->name('jenis_faskes.edit');
    Route::put('/jenis_faskes/{id}/update', [JenisFaskesController::class, 'update'])->name('jenis_faskes.update');
    Route::delete('/jenis_faskes/{id}', [JenisFaskesController::class, 'destroy'])->name('jenis_faskes.destroy');
    Route::get('/jenis_faskes/{id}', [JenisFaskesController::class, 'view'])->name('jenis_faskes.view');

    Route::get('/provinsi', [ProvinsiController::class, 'show'])->name('provinsi');
    Route::get('/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
    Route::post('/provinsi/store', [ProvinsiController::class, 'store'])->name('provinsi.store');
    Route::get('/provinsi/{id}/edit', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
    Route::put('/provinsi/{id}/update', [ProvinsiController::class, 'update'])->name('provinsi.update');
    Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');
    Route::get('/provinsi/{id}', [ProvinsiController::class, 'view'])->name('provinsi.view');
});

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function () {

    Route::get('/index', [AdminController::class, 'index'])->name('admin');

    Route::get('/faskes', [FaskesController::class, 'show'])->name('faskes');
    Route::get('/faskes/create', [FaskesController::class, 'create'])->name('faskes.create');
    Route::post('/faskes/store', [FaskesController::class, 'store'])->name('faskes.store');
    Route::get('/faskes/{id}/edit', [FaskesController::class, 'edit'])->name('faskes.edit');
    Route::put('/faskes/{id}/update', [FaskesController::class, 'update'])->name('faskes.update');
    Route::delete('/faskes/{id}', [FaskesController::class, 'destroy'])->name('faskes.destroy');
    Route::get('/faskes/{id}', [FaskesController::class, 'view'])->name('faskes.view');

});

Route::get('/',function () {
    return view('dashboard/beranda');
});
Route::get('/rumahsakit', function () {
    return view('dashboard/rumahsakit');
});
Route::get('/puskesmas', function () {
    return view('dashboard/puskesmas');
});
Route::get('/form', function () {
    return view('dashboard/form');
});
Route::get('/apotik', function () {
    return view('dashboard/apotik');
});
Route::get('/login', function () {
    return view('dashboard/login');
})->name('login');

route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registrasi', function () {
    return view('dashboard/registrasi');
});

