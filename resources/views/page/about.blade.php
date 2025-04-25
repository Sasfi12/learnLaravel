@extends("layout.layout")
@section("content")
    <a href="{{url('/')}}">go back</a>
    <ul>
   @foreach ($myObject as $user) 
            <p>{{$user -> nom}} is at index {{$user -> id }}</p>
   @endforeach
   </ul>
@endsection