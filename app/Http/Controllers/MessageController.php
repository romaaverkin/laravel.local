<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $my_array = [];

        for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')); $i++) {
            $my_array[$i] = $i + 1;
        }

        return view('message.index', [
            'title' => 'Вывод переменных',
            'arr' => $my_array,
            'day' => date('d')
        ]);
    }
}
