@extends('layouts.master')
@section('content')
<br>
    @foreach ($post as $post)
   <div border>
   
    Title : {{$post->title}} <br>
    Description : {{$post->description}} <br>
    CreatedAt :  {{ \Carbon\Carbon::parse($post->created_at)->format('l jS \\of F Y h:i:s A')}} <br>
    
</div>
<br>
<br>
<br>
<div>
    Name:{{$post->user->name}}  <br>
    Email:{{$post->user->email}}  <br>
 </div>
 @endforeach

 @endsection