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
            'name' => 'Andrew D.',
            'email' => 'axd7832@test.com',
            'password' => Hash::make('Password123')
        ]);

        User::create([
            'name' => 'Greg G.',
            'email' => 'gg@test.com',
            'password' => Hash::make('TestTest')
        ]);

        User::create([
            'name' => 'Jake B.',
            'email' => 'jb@test.com',
            'password' => Hash::make('TestTest')
        ]);


        User::create([
            'name' => 'Jane D.',
            'email' => 'jd@test.com',
            'password' => Hash::make('TestTest')
        ]);
        
        User::create([
            'name' => 'Ryan B.',
            'email' => 'rb@test.com',
            'password' => Hash::make('TestTest')
        ]);


        
    }
}
