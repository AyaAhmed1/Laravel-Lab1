@extends('layouts.app')


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
      <th > Slug</th>
      <th> Actions </th>
    </tr>
  </thead>
    @foreach ($posts as $post)
    <tr>
    <td> {{$post->id}} </td>
    <td> {{$post->title}} </td>
    <td> {{$post->user->name}}  </td>
    <td> {{ $post->human_readable }} </td>
    <td> {{ $post->slug }} </td>

  <!-- <td> {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}} </td>-->
   <td>     <button type="button" class="btn btn-info" onclick="window.location.href='posts/{{$post->id}}'">View</button>
 <button type="button" class="btn btn-primary" onclick="window.location.href='posts/{{$post->id}}/edit'">Edit</button> 
 <form id="target" method="post" action="posts/{{$post->id}}" >
 {{csrf_field()}}
 {{method_field("Delete")}}
 <button type="submit" id="{{$post->id}}" class="del btn btn-danger"  >Delete</button>
 </form>
 </td>
    </tr>
    @endforeach

    
     </table>
     {{ $posts->links() }}

<script>
/*
$('#target').on('click',function(){
  var check=confirm("Are you sure you want to delete ");
  if(check)
{
 var post_id=($(this).attr('id'))
  
  }
})

$('#target').submit(function( event ) {
  event.preventDefault();
  var check=confirm("Are you sure you want to delete ");
  if(check)
{
 var post_id=($(this).find("button").attr('id'))

  //action="posts/{{$post->id}}
  window.location.href = 'posts/'+post_id; 
}
});
*/
</script> 

 @endsection
