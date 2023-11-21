<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;



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
    return view('index');
});

// Home
Route::get('/home', 'HomeController@index');

// Data Pasien
Route::get('/get-data-pasien', 'PasienController@index');

// Pasien Detail
Route::get('/pasien/detail/{id}', 'PasienController@detail');

// Informasi KKN
Route::get('/post/informasi-kkn', 'PostController@showByTitle');

// Post by User
Route::get('/post/user/{id}', 'PostController@showByUser');

// Post by Tanggal
Route::get('/post/tanggal/{date}', 'PostController@showByDate');

// Comments by Post
Route::get('/post/{id}/comment', 'CommentController@showByPost');

// Post by Kategori
Route::get('/post/kategori/{id}', 'PostController@showByCategory');

// Admin Routes
Route::prefix('wbpanel')->middleware(['admin'])->group(function () {
    // Kategori
    Route::get('/kategori', 'AdminController@kategoriIndex');
    Route::get('/kategori/form', 'AdminController@kategoriForm');
    Route::post('/kategori/save', 'AdminController@kategoriSave');
    Route::post('/kategori/update/{id}', 'AdminController@kategoriUpdate');
    Route::get('/kategori/delete/{id}', 'AdminController@kategoriDelete');

    // Post
    Route::get('/post', 'AdminController@postIndex');
    Route::get('/post/form', 'AdminController@postForm');
    Route::post('/post/save', 'AdminController@postSave');
    Route::post('/post/update/{id}', 'AdminController@postUpdate');
    Route::get('/post/delete/{id}', 'AdminController@postDelete');
});

// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
