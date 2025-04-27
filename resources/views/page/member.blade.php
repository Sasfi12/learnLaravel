@extends("layout.layout")
@section("content")
<a href="{{url('/')}}">go back</a>
    <h1>Our members</h1>
    @foreach ($members as $member)
        {{$member -> nom}} is {{$member -> age}} years old <br> 
    @endforeach
@endsection
