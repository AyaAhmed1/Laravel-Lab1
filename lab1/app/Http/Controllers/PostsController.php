<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
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
        $posts=Post::paginate(3);
      // $posts = DB::table('posts')->paginate(15); 
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

   public function store(StorePostRequest $request){
      // dd($request);  
       //key name in the form 
       /*
       //make class validation
       $request->validate([
           //$validator = Validator::make($input, $rules, $messages);  

            'title' => 'required |min:3|max:5 ',
            'description' => 'required'
       ],[
           'title.required'=>'required  feild',
           'title.min' =>"Min is 3 charachters"
       ]);
       */
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
    return view('posts.edit',[
        'post'=>$post,
    ]);
  } 
  public function update(Request $request){
    $post_id= addslashes($request->id) ;
      DB::table('posts')
      ->where('id', $post_id)
      ->update([
          'title' => $request->title,
          'description' => $request->description ,
          ]); 
          return redirect("posts/$post_id"); 
  }
  public function show(Request $request){
    $post_id= addslashes($request->id) ;
    $posts=Post::all();
    $post=$posts->where('id', $post_id);;
    return view('posts.show',[
        'post'=>$post,
    ]);

  }

  public function delete(Request $request){
    $post_id= addslashes($request->id) ;
    DB::table('posts')->where('id',$post_id )->delete();
   return redirect('posts');
  } 
}