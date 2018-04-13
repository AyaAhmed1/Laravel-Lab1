<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      
    </head>
    <body>
     <h1> All Posts </h1> 
     <br>
     <br>  
     <br>
   
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

     
    </body>
</html>
