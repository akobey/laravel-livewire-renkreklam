<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aydın',
            'email' => 'akobey@gmail.com',
            'password' => bcrypt('akobey751075'),
            'utype' => 'admin',
        ]);

        User::create([
            'name' => 'Pala',
            'email' => 'pala@gmail.com',
            'password' => bcrypt('pala751075'),
            'utype' => 'editor',
        ]);


        User::create([
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'password' => bcrypt('ali751075'),
            'utype' => 'user',
        ]);
    }
}
