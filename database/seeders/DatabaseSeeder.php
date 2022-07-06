<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'title' => 'title 1',
                'slug' => 'post-1',
                'text' => 'text text text 1',
            ],
            [
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'title' => 'title 2',
                'slug' => 'post-2',
                'text' => 'text text text 2',
            ],
            [
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'title' => 'title 3',
                'slug' => 'post-3',
                'text' => 'text text text 3',
            ],
        ]);

        DB::table('users')->insert([
            'name' => 'Роман',
            'surname' => 'Аверкин',
            'birthday' => '1979-01-22',
            'email' => 'romaaverkin@gmail.com',
            'password' => Carbon::now()->toDateTimeString(),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
