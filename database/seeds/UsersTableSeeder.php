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
            'name' => 'Luis Antonio Terán',
            'email' => 'support@teran.tech',
            'password' => Hash::make('Teran123#')
        ]);
    }
}
