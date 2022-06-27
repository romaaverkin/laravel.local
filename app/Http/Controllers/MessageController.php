<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('message.index', [
            'title' => 'Вывод переменных',
            'data' => [1, 2, 3],
//            'data' => 5,
        ]);
    }
}
