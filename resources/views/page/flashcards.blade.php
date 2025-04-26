@extends("layout.layout")
@section("content")
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