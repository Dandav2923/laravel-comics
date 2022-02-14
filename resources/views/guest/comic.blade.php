@extends('guest.layout.base')

@section('documentTitle')
    Comic
@endsection

@section('content')
    <div class="container-info-comic">
        <div class="comic">
                    <div class="container-img-comic">
                        <img 
                            src="{{$comic['thumb']}}"
                            alt="logo comics"
                        >
                    </div>
                    <h2>{{$comic['series']}}</h2>
                    <h1>{{$comic['title']}}</h1>
                    <p>{{$comic['description']}}</p>
                    <p>{{$comic['price']}}</p>
                    <p>{{$comic['sale_date']}}</p>
                    <p>{{$comic['type']}}</p>
                    {{-- <p>{{$comic['artists']}}</p> --}}
                    {{-- <p>{{$comic['writers']}}</p> --}}
                </div>
    </div>
@endsection