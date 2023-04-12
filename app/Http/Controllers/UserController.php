<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //get all users from the database
        $users = User::all();
        //return a json reponse to an api request with the users data
        return response()->json([
            'status' => 200,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store the user in the database usig create method
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'member_type' => $request->member_type,
            'nomination_year' => $request->nomination_year
        ]);
        //return a json reponse to an api request with the user data
        return response()->json([
            'status' => 200,
            'user' => $request->all()
        ]);
    }
}
