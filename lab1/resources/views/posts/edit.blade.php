@extends('layouts.master')
@section('content')

<br>
<div class="row">
<div class="col-2"> </div>
<dic class="col-8">
@foreach ($post as $ps)
  
<form method="post" action="/posts/update"> 
{{csrf_field()}}
<input type="hidden" name="_method" value="PATCH">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="{{$ps->title}}">
  </div>
  <div class="form-group">
    <label >Description</label>
    <textarea  name="description" class="form-control" rows="3">{{$ps->description}} </textarea>  </div>

 <div class="form-group">
    <label>Post Creator</label>
    <input type="text" name="user" class="form-control" value="{{$ps->user->name}}">


  </div>


  <button type="submit" class="btn btn-success">Submit</button>
  @endforeach
      <input type="hidden" name="id" value="{{$ps->id}}">

</form>

</div>
</div>



 @endsection
