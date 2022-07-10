<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;

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
        $user = new User();

        $user->name = 'Василий';
        $user->email = 'vasya@mail.ru';
        $user->age = 34;
        $user->salary = 40000;
        
        $user->save();

        $users = User::all();

        return view('user.all', [
            'title' => 'Получение данных из моделей Eloquent в Laravel',
            'users' => $users,
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
