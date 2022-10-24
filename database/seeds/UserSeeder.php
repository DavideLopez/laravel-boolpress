<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'prova';
        $user->email = 'prova@prova.it';
        $user->password = 'password';

        $user->save();
    }
}
