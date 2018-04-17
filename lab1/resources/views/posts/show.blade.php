@extends('layouts.app')
@section('content')
<br>
<div class="row">
<div class="col-2"> </div>
<div class="col-8">
<div class="card">
<div class="card-header"> Post Info </div>
  <div class="card-body">
  @foreach ($post as $post)
  Title : {{$post->title}} <br>
    Description : {{$post->description}} <br>
    CreatedAt :  {{ $post->human_readable_data}} <br>
  </div>
  
</div>
    

<br>
<div class="card">
<div class="card-header"> Creator Info </div>
  <div class="card-body">
 
  Name:{{$post->user->name}}  <br>
    Email:{{$post->user->email}}  <br>
  </div>
  
</div>
<br>
</div>
 @endforeach
</div>
 @endsection