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
    // public function store(Request $request)
    // {
    //     // $validate_company = $request->validate([

    //     // ]);
    //     $company = Company::create([
    //         'name' => $request['name'], 
    //         'description' => $request['description']
    //         ]);
    //     return resonse($company);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function delete(Request $request, int $id)
    // {
    //     Company::destroy($id);
    //     response("Company $id Deleted");
    // }

    // /**
    //  * Gets all companies 
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function getAll(Request $request) 
    // {
    //     $companies = Company::all();
    //     return response($companies);
    // }

    // /**
    //  * Gets one company by id
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function getOne(Request $request, int $id) 
    // {
    //     $company= Company::find($id);
    //     return response($company);
    // }
}
