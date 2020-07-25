<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function create(Request $request)
    {
    }

    public function store()
    {

        $validatedAttr = request()->validate([
            'body' => 'required'
        ]);

        Post::create([
                'user_id' => auth()->id(),
                'body' => $validatedAttr['body']
            ]
        );

        return redirect('/home');
    }
}
