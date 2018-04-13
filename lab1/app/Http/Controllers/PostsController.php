<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
   public function edit(Request $request){
    //  dd("edit");
    $post_id= addslashes($request->id) ;
    $posts=Post::all();
    $users=User::all();
    $post=$posts->where('id', $post_id);;
    //return $post ;
    return view('posts.edit',[
        'post'=>$post,
         'users'=>$users
    ]);
  } 
  public function update(Request $request){
    //  return $request;
 

      DB::table('posts')
      ->where('id', $request->id)
      ->update([
          'title' => $request->title,
          'description' => $request->description ,
        
          ]); 
          return redirect('posts'); 
      
  }
}
