<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('message.index', [
            'title' => 'Вывод переменных',
            'arr' => [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
        ]);
    }
}
