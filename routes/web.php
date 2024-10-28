<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TenantController;
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

// Route::get('/', function () {
//     return 'hhh';
// });
Route::get('/', [AdminController::class, 'login']);
Route::get('/register', [AdminController::class, 'register']);
Route::post('/post-register', [AdminController::class, 'postRegister']);
Route::get('/login', [AdminController::class, 'login']);
Route::post('/post-login', [AdminController::class, 'postLogin']);
Route::get('/logout', [AdminController::class, 'logout']);

Route::get('/tenants', [TenantController::class, 'index']);
Route::get('/crate-tenant', [TenantController::class, 'create']);
Route::post('/tenant-store', [TenantController::class, 'store']);
