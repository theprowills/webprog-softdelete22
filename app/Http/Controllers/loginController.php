<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function index()
    {
        return view('login');
    }


    function verifUser(Request $request){
        dd($request);
    }
    // public function store(Request $request)
    // {
    //     $post = new Post;
    //     $post->title = $request->title;
    //     $post->description = $request->description;
    //     $post->save();
    //     return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    // }
}
