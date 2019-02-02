<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Workflow;

class WorkflowController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_workflow = $request->validate([
            'name' => 'required|string|unique:workflows,name',
            'description' => 'string|max:255'
        ]);
        $workflow = Workflow::create([
            'name' => $validated_workflow['name'], 
            'description' => $validated_workflow['description']
            ]);
        return response($workflow);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, int $id)
    {
        Workflow::destroy($id);
        return response("Workflow $id Deleted");
    }

    /**
     * Gets all workflows
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request) 
    {
        $workflows = Workflow::all();
        foreach ($workflows as $key => $workflow) {
            $workflows[$key]['steps'] = Workflow::find($workflow['id'])->workflow_steps;
        }
        return response($workflows);
    }

    /**
     * Gets one company by id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOne(Request $request, int $id) 
    {
        $workflow = Workflow::find($id);
        $workflow['steps'] = Workflow::find($id)->workflow_steps;
        return response($workflow);
    }
}
