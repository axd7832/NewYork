<?php

use Illuminate\Database\Seeder;
use App\WorkflowStep;

class WorkflowStepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkflowStep::create([
            'name' => 'C Workflow Step 1',
            'signoffs_required' => true,
            'step_number' => '1',
            'workflow_id' => '1'
        ]);

        WorkflowStep::create([
            'name' => 'C Workflow Step 2',
            'signoffs_required' => true,
            'step_number' => '2',
            'workflow_id' => '1'
        ]);

        WorkflowStep::create([
            'name' => 'C Workflow Step 2',
            'signoffs_required' => true,
            'step_number' => '3',
            'workflow_id' => '1'
        ]);
    }
}
