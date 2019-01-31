<?php

use Illuminate\Database\Seeder;
use App\Milestone;

class MilestoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Milestone::create([
            'name' => 'A',
            'description' => 'Startup Milestone: A'
        ]);

        Milestone::create([
            'name' => 'B',
            'description' => 'Startup Milestone: B'
        ]);

        Milestone::create([
            'name' => 'C',
            'description' => 'Startup Milestone: C'
        ]);
    }
}
