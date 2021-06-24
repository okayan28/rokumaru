<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProductController;
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
});


Route::get('/staffs/new', [StaffController::class, 'new']);
Route::post('/staffs/new/confirm', [StaffController::class, 'newConfirm']);
Route::post('/staffs/create', [StaffController::class, 'create']);
Route::get('/staffs', [StaffController::class, 'index']);
Route::get('/staffs/{id}', [StaffController::class, 'show']);
Route::get('/staffs/{id}/edit', [StaffController::class, 'edit']);
Route::post('/staffs/{id}/edit/confirm', [StaffController::class, 'editConfirm']);
Route::post('/staffs/{id}/update', [StaffController::class, 'update']);
Route::get('/staffs/{id}/delete/confirm', [StaffController::class, 'deleteConfirm']);
Route::post('/staffs/{id}/delete', [StaffController::class, 'delete']);

Route::get('/products/new', [ProductController::class, 'new']);
Route::post('/products/new/confirm', [ProductController::class, 'newConfirm']);
Route::post('/products/create', [ProductController::class, 'create']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::post('/products/{id}/edit/confirm', [ProductController::class, 'editConfirm']);
Route::post('/products/{id}/update', [ProductController::class, 'update']);
Route::get('/products/{id}/delete/confirm', [ProductController::class, 'deleteConfirm']);
Route::post('/products/{id}/delete', [ProductController::class, 'delete']);