<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('message.index', [
            'title' => 'Вывод переменных',
            'arr' => [4, 5, 9, 0, 12],
        ]);
    }
}
