<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index()
    {
        $posts=Post::paginate(3);
       return view ('posts.index',[
            'posts' => $posts
        ]);
   }
   public function create(){
     $users=User::all();
     return view('posts.create',[
         'users'=>$users
     ]);
   }

   public function store(StorePostRequest $request){
        Post::create([
            'title'=>$request->title,
            'description'=> $request->description,
            'user_id'=>$request->user,
        ]);
        return redirect('posts');
      }
     
   public function edit(Request $request){
    //  dd("edit");
    $post_id=$request->id ;
    $posts=Post::all();
    $users=User::all();
    $post=$posts->where('id', $post_id);;
    return view('posts.edit',[
        'post'=>$post,
    ]);
  } 
  public function update(UpdatePostRequest $request){
     return $request;
    $post_id= $request->id ;
      DB::table('posts')
      ->where('id', $post_id)
      ->update([
          'title' => $request->title,
          'description' => $request->description ,
          ]); 
          return redirect("posts/$post_id"); 
  }

  public function show(Request $request){
    $post_id=$request->id ;
    $posts=Post::all();
    $post=$posts->where('id', $post_id);
    return view('posts.show',[
        'post'=>$post,
    ]);
  }

  public function destroy(Request $request){
    $post_id= $request->id;
    DB::table('posts')->where('id',$post_id )->delete();
   return redirect('posts');
  } 
}