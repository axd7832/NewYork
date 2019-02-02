<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Andrew Diana',
            'email' => 'axd7832@test.com',
            'password' => Hash::make('Password123')
        ]);

        User::create([
            'name' => 'Andrew Test',
            'email' => 'axd7833@test.com',
            'password' => Hash::make('TestTest')
        ]);
    }
}
