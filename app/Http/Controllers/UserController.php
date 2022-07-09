<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
        $users = DB::table('users')
            ->join('cities', 'users.id', '=', 'cities.users_id')
            ->get();

        return view('user.all', [
            'title' => 'Вывод полученных записей Users',
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
