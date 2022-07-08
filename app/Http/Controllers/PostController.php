<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->get();

        return view('user.all', [
            'title' => 'Вывод полученных записей',
            'users' => $users
        ]);

    }
}
