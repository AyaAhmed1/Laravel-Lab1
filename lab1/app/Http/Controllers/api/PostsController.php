<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\Model;


class PostsController extends Controller
{
    /*
    public function index(){
        $posts=Post::paginate(1);
      return PostResource::collection($posts);
        //return $posts;
    }
    */
    public function index(){
        $posts = Post::with('user')->get();
        return $posts;
    }
    public function store(StorePostRequest $request){
        $post=Post::create($request->all());
        return  new PostResource($post);
        //return $post;
    }
    
}
