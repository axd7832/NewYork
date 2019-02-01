<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Milestone;

class MilestoneController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_company = $request->validate([
            'name' => 'required|string|unique:milestones,name',
            'description' => 'string|max:255'
        ]);
        $company = Milestone::create([
            'name' => $validated_company['name'], 
            'description' => $validated_company['description']
            ]);
        return resonse($company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, int $id)
    {
        // Adds the id to the request so it can be validated
        // $request->merge($id);
        // $data = $request ->validate([
        //     'id' => 'required|exists:milestones'
        // ]);
        Milestone::destroy($id);
        response("Milestone $id Deleted");
    }

    /**
     * Gets all companies 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request) 
    {
        $milestones = Milestone::all();
        return response($milestones);
    }

    /**
     * Gets one company by id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOne(Request $request, int $id) 
    {
        // $request = $request->merge($id);
        // $validate_milestone_id = $request -> validate([
        //     'id' => 'required|exists:milestones'
        // ]);
        $milestone = Milestone::find($id);
        return response($milestone);
    }
}
