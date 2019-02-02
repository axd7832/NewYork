<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedUser = $request->validate([
        //     'name' => 'required'
        // ]);

        $user = User::create([
            'name' => $request['name'], 
            'email' => $request['email'],
            'password' => $request['password']
            ]);
        return response($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, int $id)
    {
        User::destroy($id);
        return response("User $id Deleted");
    }

    /**
     * Gets all Users
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request) 
    {
        $users = User::all();
        return response($users);
    }

    /**
     * Gets one User by id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOne(Request $request, int $id) 
    {
        $user = User::find($id);
        return response($user);
    }
}
