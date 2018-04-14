@extends('layouts.master')
@section('content')
<br>
    @foreach ($post as $post)
   <div class="well">
   
    Title : {{$post->title}} <br>
    Description : {{$post->description}} <br>
    CreatedAt :  {{ $post->human_readable_data}} <br>
    
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