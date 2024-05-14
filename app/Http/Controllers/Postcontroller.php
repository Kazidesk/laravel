<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        return Post:: paginate(10);
    }

    public function createPost();
    {
        $data= $request -> validate ([
            "title"=> ["required","string","min:3"],
            "content"=>["required","string","max:500"],
            "user_id"=>["required","exists:users_id"],
        ]);

            return Post::create($data);


    }
}
