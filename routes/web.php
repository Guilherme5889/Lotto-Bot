<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;
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

// WebSite Views
Route::get('/', [WebsiteController::class, 'index'])->name('index');
Route::get('/ranking', [WebsiteController::class, 'getRanking'])->name('ranking');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');