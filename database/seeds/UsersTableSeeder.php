<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use SigMetBusTesting\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'rodrigo';
        $user->email = 'rodrigo@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
