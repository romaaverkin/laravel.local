<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function lesson()
    {
        return view('vue.lesson', [
            'title' => 'Изучаю Vue',
        ]);
    }
}
