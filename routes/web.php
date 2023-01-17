<?php

use Illuminate\Support\Facades\Route;

// import Controller
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DataormasController;
use App\Http\Controllers\RekapdataOrmas;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewormasController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\InformationController;


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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/data-ormas', [DataormasController::class, 'index'])->name('data-ormas');
    Route::get('/pengajuan-ormas', [DataormasController::class, 'pengajuan'])->name('pengajuan-ormas');
    Route::get('/rekap-desa', [RekapdataOrmas::class, 'rekapDesa'])->name('rekap-desa');
    Route::get('/rekap-kecamatan', [RekapdataOrmas::class, 'rekapKecamatan'])->name('rekap-kecamatan');
    Route::get('/rekap-kabupaten', [RekapdataOrmas::class, 'rekapKabupaten'])->name('rekap-kabupaten');
    Route::get('/data-user', [UserController::class, 'data_user'])->name('data-user');
    Route::get('/del-us/{user_id}', [UserController::class, 'destroy'])->name('del-us');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
    Route::get('/profile', [UserviewController::class, 'index'])->name('profile');
});

Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('/update-profile');

Route::get('/acctask/{id}', [DataormasController::class, 'approve'])->name('acctask');
    Route::get('/ejtask/{id}', [DataormasController::class, 'ejject'])->name('ejtask');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/view-ormas', [ViewormasController::class, 'index'])->name('view-ormas');
Route::get('/chart-ormas', [ChartController::class, 'index'])->name('chart-ormas');

Route::get('/export-profile', [DataormasController::class, 'export'])->name('export-profile');

Route::get('/data-informasi', [InformationController::class, 'index'])->name('data-informasi');
Route::get('/create-informasi', [InformationController::class, 'create'])->name('create-informasi');
Route::post('/save-informasi', [InformationController::class, 'store'])->name('save-informasi');
Route::get('/del-inf/{id}', [InformationController::class, 'destroy'])->name('del-inf');
Route::get('/edit-inf/{id}', [InformationController::class, 'edit'])->name('edit-inf');
Route::post('/upd-inf/{id}', [InformationController::class, 'update'])->name('upd-inf');