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
use App\Http\Controllers\VotingController;
use App\Http\Controllers\IncomingmailController;
use App\Http\Controllers\OutgoingmailController;
use App\Http\Controllers\ToolsController;
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
    Route::get('/voting', [VotingController::class, 'index'])->name('voting');
    Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
    Route::get('/notification', [NotificationController::class, 'index'])->name('notification');

    Route::post('/simpantask', [TaskController::class, 'store'])->name('simpantask');
    Route::get('/hapustask/{id}', [TableController::class, 'destroy'])->name('hapustask');

    Route::get('/acctask/{id}', [TableController::class, 'approve'])->name('acctask');
    Route::get('/ejtask/{id}', [TableController::class, 'ejject'])->name('ejtask');

    // Suratmasuk
    Route::get('/incomingmail', [IncomingmailController::class, 'index'])->name('incomingmail');
    Route::post('/simpansuratmasuk', [IncomingmailController::class, 'store'])->name('simpansuratmasuk');
    Route::get('/hapussuratmasuk/{id}', [IncomingmailController::class, 'destroy'])->name('hapussuratmasuk');
    Route::get('/editsuratmasuk/{id}', [IncomingmailController::class, 'edit'])->name('editsuratmasuk');
    Route::post('/updatesuratmasuk/{id}', [IncomingmailController::class, 'update'])->name('updatesuratmasuk');


    Route::get('/outgoingmail', [OutgoingmailController::class, 'index'])->name('outgoingmail');
    Route::post('/simpansuratkeluar', [OutgoingmailController::class, 'store'])->name('simpansuratkeluar');
    Route::get('/hapussuratkeluar/{id}', [OutgoingmailController::class, 'destroy'])->name('hapussuratkeluar');
    Route::get('/editsuratkeluar/{id}', [OutgoingmailController::class, 'edit'])->name('editsuratkeluar');
    Route::post('/updatesuratkeluar/{id}', [OutgoingmailController::class, 'update'])->name('updatesuratkeluar');

    Route::get('/tools', [ToolsController::class, 'index'])->name('tools');
    Route::post('/simpantools', [ToolsController::class, 'store'])->name('simpantools');

    Route::get('/export-surmas', [IncomingmailController::class, 'export'])->name('export-surmas');
    Route::get('/export-surkel', [OutgoingmailController::class, 'export'])->name('export-surkel');

    Route::get('/hapustool/{id}', [ToolsController::class, 'destroy'])->name('hapustool');

});


