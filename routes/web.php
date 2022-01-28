<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\ThietBiController;
use App\Http\Controllers\AjaxController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/dashboard', [MainUserController::class, 'UserDashboard'])->name('user.dashboard');
Route::post('/', [MainUserController::class, 'PostLogin'])->name('postlogin');

//thong tin nguoi dung
Route::group(['prefix' => 'user'], function () {
    Route::get('/logout', [MainUserController::class, 'Logout'])->name('user.logout');
    Route::get('/profile/edit', [MainUserController::class, 'UserProfileEdit'])->name('user.profile.edit');
    Route::post('/profile/store', [MainUserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/password/view', [MainUserController::class, 'UserPasswordView'])->name('user.password.view');
    Route::post('/password/update', [MainUserController::class, 'UserPasswordUpdate'])->name('user.password.update');
});

//thiet bi
Route::group(['prefix' => 'thietbi'], function () {
    Route::get('/danhsach', [ThietBiController::class, 'DanhSach'])->name('thietbi.danhsach');
    Route::get('/getthem', [ThietBiController::class, 'GetThem'])->name('thietbi.getthem');
    //khi thay đổi nhóm thiết bị thì danh mục loại thiết bị đc hiển thị cũng sẽ thay đổi theo
    Route::get('thietbi/layloaithietbitunhomthietbi/{idLTB}', [ThietBiController::class, 'LayLoaiThietBiTuNhomThietBi']);
    Route::post('/postthem', [ThietBiController::class, 'PostThem'])->name('thietbi.postthem');
    Route::get('/xoa/{id}', [ThietBiController::class, 'Xoa'])->name('thietbi.xoa');
    Route::get('/getsua/{id}', [ThietBiController::class, 'GetSua'])->name('thietbi.getsua');
    Route::post('/postsua/{id}', [ThietBiController::class, 'PostSua'])->name('thietbi.postsua');
    Route::get('/xem/{id}', [ThietBiController::class, 'Xem'])->name('thietbi.xem');
    Route::get('/getbangiao/{id}', [ThietbiController::class, 'GetBanGiao']);
    Route::post('/postbangiao/{id}', [ThietbiController::class, 'PostBanGiao']);
    Route::get('/getthanhly/{id}', [ThietbiController::class, 'GetThanhLy']);
    Route::post('/postthanhly/{id}', [ThietBiController::class, 'PostThanhLy']);
    Route::get('/getbaohong/{id}', [ThietBiController::class, 'GetBaoHong']);
    Route::post('/postbaohong/{id}', [ThietBiController::class, 'PostBaoHong']);
});

Route::group(['prefix' => 'ajax'], function () {
    Route::get('/LoaiThietBi/{idNhomThietBi}', [AjaxController::class, 'GetLoaiThietBi']);
    Route::get('/DonViBaoTri/{idNhaCungCap}', [AjaxController::class, 'GetDonViBaoTri']);
    Route::get('/user/{idKhoaPhong}', [AjaxController::class, 'GetUser']);
});