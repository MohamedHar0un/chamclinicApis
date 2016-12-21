<?php

use App\User;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \App\User::create([
        	'first_name' => 'Mohamed',
        	'last_name' => 'Haroun',
        	'user_name' => 'MohamedHaroun',
        	'email' => 'test@dummy.com',
        	'mobile' => '00201288181199',
        	'password' => 'test123'
        	]);
    }
}
