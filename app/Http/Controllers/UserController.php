<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show($name, $surname)
    {
        return view('user.hello', [
            'title' => 'Имя и фамилия',
            'name' => $name,
            'surname' => $surname,
        ]);
    }

    public function all()
    {
        return view('user.all', [
            'title' => 'Все',
            'text' => 'Для всех',
        ]);
    }

    public function one($name)
    {
        return view('user.one', [
            'title' => 'Только имя',
            'name' => $name
        ]);
    }
}
