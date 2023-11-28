<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeBeatController;
use App\Http\Controllers\MusicianController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PortflolioController;
use App\Http\Controllers\UserController;

//use App\Http\Controllers\Portflolio_detailController;
//use App\Models\TypeBeat;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of add will
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
Route::get('/typebeat', [TypeBeatController::class, 'getList'])->name('typebeat');
Route::get('/typebeat/add', [TypeBeatController::class, 'getAdd'])->name('typebeat.add');
Route::post('/typebeat/add', [TypeBeatController::class, 'postAdd'])->name('typebeat.add');
Route::get('/typebeat/update/{id}', [TypeBeatController::class, 'getUpdate'])->name('typebeat.update');
Route::post('/typebeat/update/{id}', [TypeBeatController::class, 'postUpdate'])->name('typebeat.update');
Route::get('/typebeat/delete/{id}', [TypeBeatController::class, 'getDelete'])->name('typebeat.delete');

// Quản lý Musician
Route::get('/musician', [MusicianController::class, 'getList'])->name('musician');
Route::get('/musician/add', [MusicianController::class, 'getAdd'])->name('musician.add');
Route::post('/musician/add', [MusicianController::class, 'postAdd'])->name('musician.add');
Route::get('/musician/update/{id}', [MusicianController::class, 'getUpdate'])->name('musician.update');
Route::post('/musician/update/{id}', [MusicianController::class, 'postUpdate'])->name('musician.update');
Route::get('/musician/delete/{id}', [MusicianController::class, 'getDelete'])->name('musician.delete');

// Quản lý Songs
Route::get('/songs', [SongsController::class, 'getList'])->name('songs');
Route::get('/songs/add', [SongsController::class, 'getAdd'])->name('songs.add');
Route::post('/songs/add', [SongsController::class, 'postAdd'])->name('songs.add');
Route::get('/songs/update/{id}', [SongsController::class, 'getUpdate'])->name('songs.update');
Route::post('/songs/update/{id}', [SongsController::class, 'postUpdate'])->name('songs.update');
Route::get('/songs/delete/{id}', [SongsController::class, 'getDelete'])->name('songs.delete');

// Quản lý Status
Route::get('/status', [StatusController::class, 'getList'])->name('status');
Route::get('/status/add', [StatusController::class, 'getAdd'])->name('status.add');
Route::post('/status/add', [StatusController::class, 'postAdd'])->name('status.add');
Route::get('/status/update/{id}', [StatusController::class, 'getUpdate'])->name('status.update');
Route::post('/status/update/{id}', [StatusController::class, 'postUpdate'])->name('status.update');
Route::get('/status/delete/{id}', [StatusController::class, 'getDelete'])->name('status.delete');

// Quản lý Portflo
Route::get('/portflolio', [PortflolioController::class, 'getList'])->name('portflolio');
Route::get('/portflolio/add', [PortflolioController::class, 'getAdd'])->name('portflolio.add');
Route::post('/portflolio/add', [PortflolioController::class, 'postAdd'])->name('portflolio.add');
Route::get('/portflolio/update/{id}', [PortflolioController::class, 'getUpdate'])->name('portflolio.update');
Route::post('/portflolio/update/{id}', [PortflolioController::class, 'postUpdate'])->name('portflolio.update');
Route::get('/portflolio/delete/{id}', [PortflolioController::class, 'getDelete'])->name('portflolio.delete');

//Quản lý UserH
Route::get('/user', [UserController::class, 'getList'])->name('user');
Route::get('/user/add', [UserController::class, 'getAdd'])->name('user.add');
Route::post('/user/add', [UserController::class, 'postAdd'])->name('user.add');
Route::get('/user/update/{id}', [UserController::class, 'getUpdate'])->name('user.update');
Route::post('/user/update/{id}', [UserController::class, 'postUpdate'])->name('user.update');
Route::get('/user/delete/{id}', [UserController::class, 'getDelete'])->name('user.delete');