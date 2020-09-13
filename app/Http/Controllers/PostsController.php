<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
     {
        return view('posts/create');
    }

    public function store()
     {
       $data = request()->validate([
           'caption' => 'required',      //validation rules in the laravel
           'image' => 'required|image'   //we can add as many as validation rules to  by using pipe notation '|'
       ])  ;  

      $imagePath = request('image')->store('upload', 'public');
       //authenticated user
       auth()->user()->posts()->create([
           'caption' => $data['caption'],
           'image' => $imagePath,

       ]);
    //    \App\Models\Post::create($data); 
           return redirect('/profile/' . auth()->user()->id);


    }
}
