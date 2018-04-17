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
    public function index(){
       $posts = Post::with('user')->paginate(1); //with egerloadin
    //   $posts=Post::paginate(1);   //without egerloading
    return PostResource::collection($posts);
    }

    public function store(StorePostRequest $request){
        $post=Post::create($request->all());
        return  new PostResource($post);
    }

}
