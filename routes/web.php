<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\UploadManager;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/login', [AuthManager::class,'login']) -> name('login');
Route::post('/login', [AuthManager::class,'loginPost']) -> name('login.post');

Route::get('/registration',[AuthManager::class,'registration']) -> name('registration');
Route::post('/registration',[AuthManager::class,'registrationPost']) -> name('registration.post');

Route::get('/logout', [AuthManager::class,'logout'])->name('logout');

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/upload', [UploadManager::class, 'upload'])->name('upload');

Route::post('/upload', [UploadManager::class, 'uploadPost'])->name('upload.post');

Route::get('/forget-password', [ForgetPasswordManager::class,'forgetPassword'])->name('forgetPassword');

Route::post('/forget-password', [ForgetPasswordManager::class,'forgetPasswordPost'])->name('forgetPassword.post');

Route::get('reset-password/{token}', [ForgetPasswordManager::class,'resetPassword'])->name('resetPassword');