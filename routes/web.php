<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AjaxController;

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

Route::get('/post', [PostController::class, 'show']);

Route::get('/user/{name}/{surname}', [UserController::class, 'show']);

Route::get('/user/all', [UserController::class, 'all']);

Route::get('user/{name}', [UserController::class, 'one']);

Route::get('/message', [MessageController::class, 'index']);

Route::get('/lesson', [VueController::class, 'lesson']);

Route::get('/client', [AjaxController::class, 'client']);

Route::get('/ajax', [AjaxController::class, 'ajax']);
