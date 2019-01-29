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
        $company = Company::create([
            'name' => 'Tesla',
            'description' => 'A US Based Car Company'
        ]);

        $company = Company::create([
            'name' => 'Google',
            'description' => 'A verb'
        ]);

        $company = Company::create([
            'name' => 'Facebook',
            'description' => 'See no evil. Speak no evil'
        ]);

        $company = Company::create([
            'name' => 'Twitter',
            'description' => 'News Platform?'
        ]);
    }
}
