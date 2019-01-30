<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::create([
            'name' => 'Tesla',
            'description' => 'A US Based Car Company'
        ]);

        Company::create([
            'name' => 'Google',
            'description' => 'A verb'
        ]);

        Company::create([
            'name' => 'Facebook',
            'description' => 'See no evil. Speak no evil'
        ]);

        Company::create([
            'name' => 'Twitter',
            'description' => 'News Platform?'
        ]);
    }
}
