<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function create(Request $request)
    {
    }
    public function store(){
        $post = new Post();

        $post->body = request('body');

        var_dump($post);

        return redirect()->back();
    }
}
