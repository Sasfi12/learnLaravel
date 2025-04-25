<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{url('/')}}">go back</a>
    <h2>Salut</h2>
    <ul>
   @foreach ($myObject as $user) 
            <p>{{$user -> nom}} is at index {{$user -> id }}</p>
   @endforeach
   </ul>
</body>
</html>