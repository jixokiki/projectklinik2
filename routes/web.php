<?php

use App\Http\Controllers\AsesmenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonselingController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatLaboratoriumController;

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
Route::get('/', [HomeController::class, 'getHomePage']);

Route::get('/login', [UserController::class, 'getLoginPage'])->name('login');
Route::post('/login', [UserController::class, 'attemptLogin']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [Controller::class, 'dashboard']);

    // master data
    Route::get('/pasien', [MasterDataController::class, 'getPasien']);
    Route::get('/pasien/{id}', [MasterDataController::class, 'getDetailPasien']);
    Route::get('/pasien/{id}/riwayat', [MasterDataController::class, 'getRiwayatPasien']);
    Route::post("/pasien", [MasterDataController::class, 'newPasien']);
    Route::get('/obat', [MasterDataController::class, 'getObat']);
    Route::get('/pesanan-obat', [MasterDataController::class, 'getPesananObat']);

    // tab pendaftaran
    Route::get('/pendaftaran', [PendaftaranController::class, 'getPendaftaran']);
    Route::post('/pendaftaran', [PendaftaranController::class, 'newPendaftaran']);

    // tab asesmen
    Route::get('/antrian_asesmen', [AsesmenController::class, 'getAsesmenPage']);
    Route::get('/asesmen', [AsesmenController::class, 'invokeAsesmen']);
    Route::post('/asesmen', [AsesmenController::class, 'tambahAsesmen']);


    // Rute untuk menampilkan form

    Route::get('/riwayat', function () {
        return view('riwayat');
    })->name('riwayat.form');
    
    Route::post('/riwayat', [RiwayatLaboratoriumController::class, 'store'])->name('riwayat.store');
    
    


    // tab pemeriksaan
    Route::get('/antrian_pemeriksaan', [PemeriksaanController::class, 'getAntrianPemeriksaanPage']);
    Route::get('/pemeriksaan', [PemeriksaanController::class, 'invokePemeriksaan']);
    Route::prefix('pemeriksaan')->group(function () {
        Route::get('/asesmen_awal/{id}', [PemeriksaanController::class, 'dataAsesmenAwal']);
        Route::get('/soape/{id}', [PemeriksaanController::class, 'getSoape']);
        Route::post('/soape', [PemeriksaanController::class, 'newSoape']);
        Route::get('/penunjang/{id}', [PemeriksaanController::class, 'getPenunjang']);
        Route::post('/penunjang', [PemeriksaanController::class, 'newPenunjang']);
        Route::get('/resume_medis/{id}', [PemeriksaanController::class, 'getResumeMedis']);
        Route::post('/resume_medis', [PemeriksaanController::class, 'newResumeMedis']);
    });

    Route::get('/konseling', [KonselingController::class, 'getKonselingPage']);
    Route::post('/konseling', [KonselingController::class, 'newKonseling']);

    // forms
    Route::get('/tambah_pasien', [FormController::class, 'getFormTambahPasien']);
    Route::get('/isi_asesmen', [FormController::class, 'getIsiAsesmenPage']);

    // laboratorium
    // Route::get('/laboratorium', [LaboratoriumController::class, 'getLaboratoriumPage']);
    Route::get('/isilab', [LaboratoriumController::class, 'getLaboratoriumData']);

    Route::get('/laboratorium', [LaboratoriumController::class, 'getLaboratoriumPage'])->name('laboratorium.index');
    Route::get('/laboratorium/detail', [LaboratoriumController::class, 'getLaboratoriumData'])->name('laboratorium.detail');

});