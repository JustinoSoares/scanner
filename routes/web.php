<?php

use App\Http\Controllers\ocrController;
use App\Http\Controllers\qrCodeController;
use App\Http\Controllers\uploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("inicio");
});
Route::get("/code", [qrCodeController::class, "show"])->name("code");
// Route::get("/ocr", [ocrController::class, "show"])->name("ocr");
Route::post('/upload-imagem', [uploadController::class, 'uploadImagem'])->name('upload');
