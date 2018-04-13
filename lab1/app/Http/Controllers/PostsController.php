<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

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

   public function create(){
     //  dd("create");
     $users=User::all();
     return view('posts.create',[
         'users'=>$users
     ]);
   }

   public function store(Request $request){
      
       // dd($request->user);  
    Post::create([
        'title'=>$request->title,
        'description'=> $request->description,
        'user_id'=>$request->user,
    ]);
    return redirect('posts'); 
   }
}
