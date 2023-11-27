<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeBeatController;
use App\Http\Controllers\MusicianController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PortflolioControllerController;
//use App\Http\Controllers\Portflolio_detailController;
//use App\Models\TypeBeat;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Trang chủ
Route::get('/', [HomeController::class, 'getHome'])->name('frontend');
Route::get('/home', [HomeController::class, 'getHome'])->name('frontend');

// Quản lý TypeBeat
Route::get('/typebeat', [TypeBeatController::class, 'getDanhSach'])->name('typebeat');
Route::get('/typebeat/them', [TypeBeatController::class, 'getThem'])->name('typebeat.them');
Route::post('/typebeat/them', [TypeBeatController::class, 'postThem'])->name('typebeat.them');
Route::get('/typebeat/sua/{id}', [TypeBeatController::class, 'getSua'])->name('typebeat.sua');
Route::post('/typebeat/sua/{id}', [TypeBeatController::class, 'postSua'])->name('typebeat.sua');
Route::get('/typebeat/xoa/{id}', [TypeBeatController::class, 'getXoa'])->name('typebeat.xoa');

// Quản lý Musician
Route::get('/musician', [MusicianController::class, 'getDanhSach'])->name('musician');
Route::get('/musician/them', [MusicianController::class, 'getThem'])->name('musician.them');
Route::post('/musician/them', [MusicianController::class, 'postThem'])->name('musician.them');
Route::get('/musician/sua/{id}', [MusicianController::class, 'getSua'])->name('musician.sua');
Route::post('/musician/sua/{id}', [MusicianController::class, 'postSua'])->name('musician.sua');
Route::get('/musician/xoa/{id}', [MusicianController::class, 'getXoa'])->name('musician.xoa');

// Quản lý Songs
Route::get('/songs', [SongsController::class, 'getDanhSach'])->name('songs');
Route::get('/songs/them', [SongsController::class, 'getThem'])->name('songs.them');
Route::post('/songs/them', [SongsController::class, 'postThem'])->name('songs.them');
Route::get('/songs/sua/{id}', [SongsController::class, 'getSua'])->name('songs.sua');
Route::post('/songs/sua/{id}', [SongsController::class, 'postSua'])->name('songs.sua');
Route::get('/songs/xoa/{id}', [SongsController::class, 'getXoa'])->name('songs.xoa');

// Quản lý Status
Route::get('/status', [StatusController::class, 'getDanhSach'])->name('status');
Route::get('/status/them', [StatusController::class, 'getThem'])->name('status.them');
Route::post('/status/them', [StatusController::class, 'postThem'])->name('status.them');
Route::get('/status/sua/{id}', [StatusController::class, 'getSua'])->name('status.sua');
Route::post('/status/sua/{id}', [StatusController::class, 'postSua'])->name('status.sua');
Route::get('/status/xoa/{id}', [StatusController::class, 'getXoa'])->name('status.xoa');

// Quản lý Portflo
Route::get('/portflolio', [PortflolioController::class, 'getDanhSach'])->name('portflolio');
Route::get('/portflolio/them', [PortflolioController::class, 'getThem'])->name('portflolio.them');
Route::post('/portflolio/them', [PortflolioController::class, 'postThem'])->name('portflolio.them');
Route::get('/portflolio/sua/{id}', [PortflolioController::class, 'getSua'])->name('portflolio.sua');
Route::post('/portflolio/sua/{id}', [PortflolioController::class, 'postSua'])->name('portflolio.sua');
Route::get('/portflolio/xoa/{id}', [PortflolioController::class, 'getXoa'])->name('portflolio.xoa');

/* Quản lý User
Route::get('/nguoidung', [UserController::class, 'getDanhSach'])->name('nguoidung');
Route::get('/nguoidung/them', [UserController::class, 'getThem'])->name('nguoidung.them');
Route::post('/nguoidung/them', [UserController::class, 'postThem'])->name('nguoidung.them');
Route::get('/nguoidung/sua/{id}', [UserController::class, 'getSua'])->name('nguoidung.sua');
Route::post('/nguoidung/sua/{id}', [UserController::class, 'postSua'])->name('nguoidung.sua');
Route::get('/nguoidung/xoa/{id}', [UserController::class, 'getXoa'])->name('nguoidung.xoa');*/