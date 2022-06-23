<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    return 'главная страница сайта';
});

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/user/{name}', [UserController::class, 'show']);

Route::get('/user/{surname}/{name}', [UserController::class, 'all']);
