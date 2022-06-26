<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('message.index', [
            'title' => 'Вывод переменных',
            'employee' => [
                'name' => 'Роман',
                'age' => '43',
                'salary' => '75000',
            ],
            'my_array' => [
                'first' => 'one',
                'second' => 'two',
                'three' => 'three',
            ],
        ]);
    }
}
