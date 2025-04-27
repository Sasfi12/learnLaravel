@extends("layout.layout")
@section("content")
<a href="{{url('/')}}">go back</a>
<div>
    <ul>
        @foreach ($Cards as $card)
            <li>
                <p>{{$card->question}}->{{$card->answer}}</p>
                <img src="{{$card->img}}" alt="">
            </li>
        @endforeach
    </ul>
</div>
@endsection