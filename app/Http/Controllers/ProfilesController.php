<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index($user)
    {
       $users = \App\Models\User::findOrFail($user);
        return view('profiles/index' ,[               //pass data to the view
            'user' => $users,
        ]);
    }
    public function edit(\App\Models\User $user) {
        $this->authorize('update' , $user->profile);
        return view('profiles.edit' , compact('user'));

    }
    public function update(\App\Models\User $user) 
    {
        
        $this->authorize('update' , $user->profile);
        $data= request()->validate([
            
            'title' => 'required' ,
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);
       
        if (request('image')) {
            $imagePath = request('image')->store('upload', 'public');
      

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();

        }
      
        auth()->user()->profile->update(array_merge(
            $data,
           [ 'image' => $imagePath],
        ));
        return redirect("/profile/{$user->id}");
    }
}
