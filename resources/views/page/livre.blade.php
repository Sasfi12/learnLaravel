@extends("layout.layout")
@section("content")
<a href="{{url('/')}}">go back</a>  
   @foreach ($livres as $livre) 
        <div class="book">
            <p>{{$livre -> id}} {{$livre -> auteur}} wrote {{ $livre -> titre }} in {{$livre -> titre}}</p> 
            <img src="{{$livre -> image}}" alt="">
        </div>
    @endforeach
@endsection