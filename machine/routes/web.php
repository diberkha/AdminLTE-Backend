<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JenisPegawaiController;
use App\Http\Controllers\StatusPegawaiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\JenisKelaminController;
use App\Http\Controllers\AuthController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {return view('adminlte/adminlte');});

Route::get('/navbar', [NavbarController::class,'index']);

Route::get('/master', [MasterController::class,'index']);

//CRUD
Route::get('/form', [TableController::class, 'create'])->name('agama.create');
Route::get('/table', [TableController::class, 'index'])->name('agama.index');
Route::post('/table', [TableController::class, 'store'])->name('agama.store');
Route::get('/agama{id}', [TableController::class, 'edit'])->name('agama.edit');
Route::put('/table/{id}', [TableController::class, 'update'])->name('agama.update');
Route::delete('/table/{id}', [TableController::class, 'destroy'])->name('agama.destroy');

//CRUD
Route::get('/form-pegawai', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

//CRUD
Route::get('/form-jenispegawai', [JenisPegawaiController::class, 'create'])->name('jenispegawai.create');
Route::get('/jenispegawai', [JenisPegawaiController::class, 'index'])->name('jenispegawai.index');
Route::post('/jenispegawai', [JenisPegawaiController::class, 'store'])->name('jenispegawai.store');
Route::get('/jenispegawai{id}', [JenisPegawaiController::class, 'edit'])->name('jenispegawai.edit');
Route::put('/jenispegawai/{id}', [JenisPegawaiController::class, 'update'])->name('jenispegawai.update');
Route::delete('/jenispegawai/{id}', [JenisPegawaiController::class, 'destroy'])->name('jenispegawai.destroy');

//CRUD
Route::get('/form-statuspegawai', [StatusPegawaiController::class, 'create'])->name('statuspegawai.create');
Route::get('/statuspegawai', [StatusPegawaiController::class, 'index'])->name('statuspegawai.index');
Route::post('/statuspegawai', [StatusPegawaiController::class, 'store'])->name('statuspegawai.store');
Route::get('/statuspegawai{id}', [StatusPegawaiController::class, 'edit'])->name('statuspegawai.edit');
Route::put('/statuspegawai/{id}', [StatusPegawaiController::class, 'update'])->name('statuspegawai.update');
Route::delete('/statuspegawai/{id}', [StatusPegawaiController::class, 'destroy'])->name('statuspegawai.destroy');

//CRUD
Route::get('/form-pendidikan', [PendidikanController::class, 'create'])->name('pendidikan.create');
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
Route::post('/pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::get('/pendidikan{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
Route::put('/pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
Route::delete('/pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

//CRUD
Route::get('/form-jeniskelamin', [JenisKelaminController::class, 'create'])->name('jeniskelamin.create');
Route::get('/jeniskelamin', [JenisKelaminController::class, 'index'])->name('jeniskelamin.index');
Route::post('/jeniskelamin', [JenisKelaminController::class, 'store'])->name('jeniskelamin.store');
Route::get('/jeniskelamin{id}', [JenisKelaminController::class, 'edit'])->name('jeniskelamin.edit');
Route::put('/jeniskelamin/{id}', [JenisKelaminController::class, 'update'])->name('jeniskelamin.update');
Route::delete('/jeniskelamin/{id}', [JenisKelaminController::class, 'destroy'])->name('jeniskelamin.destroy');

});

//CRUD
Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.authuser');
Route::get('/register', [AuthController::class, 'create'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
