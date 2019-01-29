<?php

use Illuminate\Database\Seeder;
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
        $user = User::create([
            'name' => 'Andrew Diana',
            'email' => 'axd7832@test.com',
            'password' => 'Password123',
        ]);
    }
}
