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
            'main_class' => 'main'
        ]);
    }
}
