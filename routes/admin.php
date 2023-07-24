<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\UploadController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//auth
Route::get('/login',[LoginController::class, 'login'])->middleware('adminLoggedIn');
Route::post('/check',[LoginController::class, 'check'])->name('admin.check');
Route::get('/logout',[LoginController::class, 'logout'])->name('admin.logout');
Route::get('/',[LoginController::class, 'contact'])->middleware('isLoggedInAdmin');

// user create

Route::resource('users', UserController::class);

// Upload CSV
Route::get('/file/upload', [CsvController::class,'index'])->name('admin.upload');
Route::post('/file/upload/successfully', [CsvController::class,'upload'])->name('cvs.upload');


Route::get('/upload', [UploadController::class,'showUploadForm'])->name('upload.form');
Route::post('/upload',[UploadController::class,'processUpload'])->name('upload.process');
