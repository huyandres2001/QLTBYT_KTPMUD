<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\ThietBiController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/dashboard', [MainUserController::class, 'UserDashboard'])->name('user.dashboard');
//thong tin nguoi dung
Route::group(['prefix'=>'user'], function (){
    Route::get('/logout', [MainUserController::class, 'Logout'])->name('user.logout');
    Route::get('/profile/edit', [MainUserController::class, 'UserProfileEdit'])->name('user.profile.edit');
    Route::post('/profile/store', [MainUserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/password/view', [MainUserController::class, 'UserPasswordView'])->name('user.password.view');
    Route::post('/password/update', [MainUserController::class, 'UserPasswordUpdate'])->name('user.password.update');
});

//thiet bi
Route::group(['prefix' => 'thietbi'], function(){
    Route::get('/danhsach', [ThietBiController::class, 'DanhSach'])->name('thietbi.danhsach');
    Route::get('/them', [ThietBiController::class, 'GetThem'])->name('thietbi.getthem');
    Route::post('/them', [ThietBiController::class, 'PostThem'])->name('thietbi.postthem');
});