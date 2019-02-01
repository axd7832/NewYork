<?php

use Illuminate\Database\Seeder;
use App\Workflow;

class WorkflowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workflow::create([
            'name' => 'C Workflow',
            'description' => 'C Workflow Template',
            'funding_type' => 'HOTSPOT'
        ]);
    }
}
