<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LoginController;
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

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/add', [Admincontroller::class, 'index']);
Route::post('/add', [Admincontroller::class, 'index']);
Route::any('/admin', [LoginController::class, 'index']);
Route::any('/cadastro', [CadastroController::class, 'index']);