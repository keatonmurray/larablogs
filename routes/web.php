<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PagesController;

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

Route::get('/', [ViewController::class, 'index']);
Route::get('/post/{id}', [ViewController::class, 'show']);
Route::get('/create-post', [ViewController::class, 'create'])->name('ckeditor.upload');;
Route::get('/about-us', [PagesController::class, 'about']);
Route::get('/contact-us', [PagesController::class, 'contact']);
Route::get('/edit-post/{id}', [ViewController::class, 'edit']);
Route::post('/store', [ViewController::class, 'store']);
