<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolaController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\DaftarOrtuController;
use App\Http\Controllers\DaftarSekolahController;
use App\Http\Controllers\BerandaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

// Route Landing Page Schoola
Route::get('/schoola/mulai', [SchoolaController::class, 'mulai']);

//Route Pilihan Masuk
Route::get('/schoola/pilihanmasuk', [SchoolaController::class, 'pilihan']);
//Route Masuk Sekolah
Route::get('/schoola/masuksekolah', [SchoolaController::class, 'masuksekolah'])->middleware('guest:sekolah')->name('sekolah');
//Route Masuk orangtua
Route::get('/schoola/masukorangtua', [OrtuController::class, 'masukorangtua']);
Route::post('/schoola/loginorangtua', [OrtuController::class, 'login']);
//Route Daftar orangtua
Route::get('/schoola/Daftarorangtua', [DaftarOrtuController::class, 'daftarorangtua']);
Route::post('/schoola/simpanorangtua', [DaftarOrtuController::class, 'simpanorangtua']);
//Route Beranda
Route::get('/schoola/berandaOrtu', [BerandaController::class, 'berandaorangtua']);
Route::get('/schoola/berandaSekolah', [BerandaController::class, 'berandasekolah']);
//Route Daftar Sekolah
Route::get('/schoola/masuksekolah', [SekolahController::class, 'masuksekolah']);
Route::post('/schoola/loginsekolah', [SekolahController::class, 'login']);
Route::get('/schoola/daftarsekolah', [DaftarSekolahController::class, 'daftarsekolah']);
Route::post('/schoola/simpansekolah', [DaftarSekolahController::class, 'simpansekolah']);

//Route bantuan
Route::get('/schoola/bantuanorangtua', [BerandaController::class, 'bantuanorangtua']);
Route::get('/schoola/bantuansekolah', 'App\Http\Controllers\BerandaController@bantuansekolah');

//Route akun
Route::get('/schoola/akunsekolah', [BerandaController::class, 'akunsekolah']);
Route::get('/schoola/akunortu', [BerandaController::class, 'akunortu']);

//Route form (gak tahu kenapa, FormController::class does not exist)
Route::get('/schoola/formOrtu', 'App\Http\Controllers\FormController@viewformortu');
Route::get('/schoola/formOrtu2', 'App\Http\Controllers\FormController@viewformortu2');
Route::get('/schoola/formOrtu3', 'App\Http\Controllers\FormController@viewformortu3');
Route::post('/schoola/formOrtu/simpan1','App\Http\Controllers\FormController@simpan1');
Route::post('/schoola/formOrtu/simpan2','App\Http\Controllers\FormController@simpan2');
Route::post('/schoola/formOrtu/simpan3','App\Http\Controllers\FormController@simpan3');

//Route lihat profil sekolah
Route::get('/schoola/profil', [BerandaController::class, 'profil']);

//Router lihat halaman respon dan form
Route::get('/schoola/lhtform', 'App\Http\Controllers\FormController@lhtform');
Route::get('/schoola/lhtresp', 'App\Http\Controllers\FormController@lhtresp');
