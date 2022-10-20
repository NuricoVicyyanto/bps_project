<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\QrController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TaskController;
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




Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/registrasi', [LoginController::class, 'registrasi']);
    Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

    // TU
    Route::get('/daftaruser', [PenggunaController::class, 'index'])->name('daftaruser');
    Route::get('/hapuspengguna/{id}', [PenggunaController::class, 'destroy'])->name('hapuspengguna');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/table', [TableController::class, 'index'])->name('table');
    Route::get('/task', [TaskController::class, 'index'])->name('task');

    Route::get('/qrcode', [QRController::class, 'index'])->name('qrcode');
    Route::post('/qrcode', [QRController::class, 'store'])->name('store');
    Route::get('qrcode/{id}', [QrController::class, 'generate'])->name('generate');
    Route::get('/delqr/{id}', [QrController::class, 'destroy'])->name('delqr');
    // Route::get('/homepage', function () {
    //     return view('/homepage');
    // });
    Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');

    //Url Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
    Route::get('/notification', [NotificationController::class, 'index'])->name('notification');

    Route::post('/simpantask', [TaskController::class, 'store'])->name('simpantask');
    Route::get('/hapustask/{id}', [TableController::class, 'destroy'])->name('hapustask');

});


