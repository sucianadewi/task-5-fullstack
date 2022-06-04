<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PassportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [PassportController::class, 'login']);
Route::middleware('auth:api')->get('/all', [PassportController::class, 'users']);

Route::name('category')->get('category', [CategoryController::class, 'index'])->middleware('auth:api');
Route::name('category.create')->post('category', [CategoryController::class, 'create'])->middleware('auth:api');
Route::name('category.update')->put('category', [CategoryController::class, 'updatee'])->middleware('auth:api');
Route::name('category.patch')->patch('category', [CategoryController::class, 'patch'])->middleware('auth:api');
Route::name('category.delete')->delete('category', [CategoryController::class, 'destroy'])->middleware('auth:api');
