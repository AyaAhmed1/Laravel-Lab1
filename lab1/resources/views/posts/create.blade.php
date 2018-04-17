@extends('layouts.app')
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<br>
<div class="row">
<div class="col-2"> </div>
<dic class="col-8">
<form method="post" action="/posts"> 
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Post Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea name="description" placeholder="Post Description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1">Post Creator</label>
    <select class="form-control" id="exampleFormControlSelect1" name="user">
    @foreach ($users as $user)
      <option value="{{$user->id}}" >{{ $user ->name }}</option>
@endforeach
    </select>

  </div>


  <button type="submit" class="btn btn-success">Submit</button>
</form>

</div>
</div>



 @endsection
