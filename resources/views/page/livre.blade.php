<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/style/style.css')}}">
</head>
<body>
<a href="{{url('/')}}">go back</a>  
   @foreach ($livres as $livre) 
        <div class="book">
            <p>{{$livre -> id}} {{$livre -> auteur}} wrote {{ $livre -> titre }} in {{$livre -> titre}}</p> 
            <img src="{{$livre -> image}}" alt="">
        </div>
    @endforeach
</body>
</html>