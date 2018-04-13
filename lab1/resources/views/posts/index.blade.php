@extends('layouts.master')


@section('content')

     
     <br>
   <div align="center">
   <button type="button" class="btn btn-success" onclick="window.location.href='posts/create'" >Create Post</button>
   </div>
   <br/>
     <table class="table">
     <thead class="thead-dark">
    <tr>
      <th >ID</th>
      <th > Title</th>
      <th >PostedBy</th>
      <th > Created at</th>
      <th> Actions </th>
    </tr>
  </thead>
    @foreach ($posts as $post)
    <tr>
    <td> {{$post->id}} </td>
    <td> {{$post->title}} </td>
    <td> {{$post->user->name}}  </td>
    <!--<td> {{$post ->created_at}} </td>-->
   <td> {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}} </td>
   <td>     <button type="button" class="btn btn-info">View</button>
 <button type="button" class="btn btn-primary">Edit</button> 
 <button type="button" class="btn btn-danger">Delete</button>
 </td>
    </tr>
    @endforeach
     </table>   

 @endsection
