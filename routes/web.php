<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();


//Bagian Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy']);

//Bagian Article
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/create', [ArticleController::class, 'create']);
Route::post('/article/store', [ArticleController::class, 'store']);
Route::get('/article/edit/{id}', [ArticleController::class, 'edit']);
Route::put('/article/update/{id}', [ArticleController::class, 'update']);
Route::get('/article/destroy/{id}', [ArticleController::class, 'destroy']);


