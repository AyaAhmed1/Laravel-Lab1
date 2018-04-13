<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
       // return Post::all();
      /* dd(Post::create([
            'id'=>30,
            'title'=>'ayaa',
            'description'=> 'neeew',
            'user_id'=>1
        ]));
*/
//dd(Post::all());

        $posts=Post::all();
        return view ('posts.index',[
            'posts' => $posts
        ]);
       
   }
}
