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

Route::get('/', function () {
    return 'главная страница сайта';
});

Route::get('/posts', function () {
    return 'список постов';
});

Route::get('/post/1', function () {
    return 'первый пост';
});

Route::get('/test', function () {
    return 'это тестовая страница';
});

Route::get('dir/test', function () {
    return 'это тестовая страница в dir';
});
