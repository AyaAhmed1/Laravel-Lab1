<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      
    </head>
    <body>
     <h1> All Posts </h1>     
     <table border="ipx solid black">
    @foreach ($posts as $post)
    <tr>
    <td> {{$post->id}} </td>

    <td> {{$post->title}} </td>
    <td> {{$post ->description}} </td>
    <td> {{$post ->user_id}} </td>
    <td> {{$post ->created_at}} </td>
    <td> {{$post->user->name}}  </td>
 
    </tr>
    @endforeach
     </table>    
    </body>
</html>
