<?php

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

Route::get('/', function () {return view('welcome');});

Route::get("/message/index/", [\App\Http\Controllers\MessageController::class, "index"]);
Route::get("/message/get/{created_at}", [\App\Http\Controllers\MessageController::class, "show"]);
Route::get("/message/send/{user}/{message}", [\App\Http\Controllers\MessageController::class, "store"]);
