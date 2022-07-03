<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function client() {
        return view('ajax.client',[
            'title' => 'Изучаю Ajax',
        ]);
    }

    public function ajax() {
        return view('ajax.ajax',[
            'title' => 'Изучаю Ajax',
        ]);
    }
}
