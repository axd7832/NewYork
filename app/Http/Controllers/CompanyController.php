<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Response;

class CompanyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = Company::create([
            'name' => $request['name'], 
            'description' => $request['description']
            ]);
        return response($company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, int $id)
    {
        Company::destroy($id);
        return response("Company $id Deleted");
    }

    /**
     * Gets all companies 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request) 
    {
        $companies = Company::all();
        return response($companies);
    }

    /**
     * Gets one company by id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOne(Request $request, int $id) 
    {
        $company= Company::find($id);
        return response($company);
    }
}
