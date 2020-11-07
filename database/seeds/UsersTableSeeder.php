<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([
            'name' => 'Jorge Alberto Loreto',
            'email' => 'jaloreto@hotmail.com',
            'password' => Hash::make('Loreto123#')
        ]);
    }
}
