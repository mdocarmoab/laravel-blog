@extends("layout.app")

@section('content')
    <h1>Notícias</h1>
    @if(count($links))
        @foreach($links as $link)
            <li><a href="news4/{{$link}}">{{$link}}</a></li>
        @endforeach
    @endif    
@endsection