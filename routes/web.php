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

Route::get('dir/test', function () {
    return 'это тестовая страница в dir';
});

Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
})->where('id', '[0-9]+');

//Route::get('user/{surname}/{name}', function ($surname, $name) {
//    return "Имя: $surname, Фамилия: $name";
//});

//Route::get('/posts/page/{page?}', function ($page = 1) {
//    return 'страница номер ' . $page;
//});

//Route::get('/city/{city?}', function ($city = "minsk") {
//    return "Введено $city";
//});

//Route::get('user/{id}', function ($id) {
//    return 'пост ' . $id;
//})->where('id', '[0-9]+');

//Route::get('user/{id}/{name}', function ($id, $name) {
//    return 'пользователь ' . $id . ' имя ' . $name;
//})->where('id', '[0-9]+')->where('name', '[a-z]{2,}');

Route::get('posts/{date}', function ($date) {
    return 'Дата равна: ' . $date;
})->where('date', '20[0-9][0-9]+-0[0-9]|1[0-2]');

Route::get('user/{id}', function ($id) {
    return 'Маршрут равен ' . $id;
})->whereNumber('id');

Route::get('city/{name}', function ($name) {
    return 'имя ' . $name;
})->whereAlpha('name');
