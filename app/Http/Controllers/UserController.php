<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use DB;
use Illuminate\Support\Facades\DB;

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

        // //store the user in the database usig create method
        $dob = date('Y-m-d', strtotime($request->dob));
        $nominated = date('Y-m-d', strtotime($request->nomination_year));
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $dob,
            'member_type' => $request->member_type,
            'nomination_year' => $nominated
        ]);
        //return a json reponse to an api request with the user data
        return response()->json([
            'status' => 200,
            'user' => User::all()
        ]);
    }
    public function updateUser(Request $request, $id)
    {
        // //store the user in the database usig create method
        $dob = date('Y-m-d', strtotime($request->dob));
        $nominated = date('Y-m-d', strtotime($request->nomination_year));
       DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'dob' => $dob,
                'member_type' => $request->member_type,
                'nomination_year' => $nominated
            ]);
        //return a json reponse to an api request with the user data
        return response()->json([
            'status' => 200,
            'user' => User::all()
        ]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'status' => 200,
            'user' => User::all()
        ]);
    }
}