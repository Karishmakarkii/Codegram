<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
       $users = \App\Models\User::findOrFail($user);
        return view('profiles/index' ,[               //pass data to the view
            'user' => $users,
        ]);
    }
}
