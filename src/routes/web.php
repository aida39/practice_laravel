<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'index']);
Route::get('/add', [TaskController::class, 'add']);
Route::post('/add', [TaskController::class, 'create']);
Route::get('/edit', [TaskController::class, 'edit']);
Route::post('/edit', [TaskController::class, 'update']);
Route::get('/delete', [TaskController::class, 'delete']);
Route::post('/delete', [TaskController::class, 'remove']);




