<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('message.index', [
            'title' => 'Вывод переменных',
            'name' => 'Роман',
            'age' => '43',
            'salary' => '75000',
            'main_class' => 'main',
            'input1' => 'number1',
            'input2' => 'number2',
            'input3' => 'number3',
            'color_red' => 'color: red',
            'text' => 'Google',
            'href' => 'https://www.google.ru/',
        ]);
    }
}
