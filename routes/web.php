<?php

use App\Http\Controllers\AWSController;
use App\Http\Controllers\UploadController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('upload');
// });

Route::get('/', [UploadController::class, 'uploadPage'])->name('upload-page');
Route::post('/page-lokal', [UploadController::class, 'upload'])->name('upload-file');
Route::post('/page-AWS', [UploadController::class, 'uploadAWS'])->name('upload-file-AWS');
Route::post('/page-upload', [UploadController::class, 'uploadFix'])->name('upload-file-fix');

Route::get('/layout', function () {
    return view('layout');
});


Route::post('/', [AWSController::class, 'layout'])->name('layout');
Route::post('/upload-file', [AWSController::class, 'AWS'])->name('aws-upload');


