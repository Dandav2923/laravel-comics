@extends('guest.layout.base')

@section('documentTitle')
    Home
@endsection

@section('content')
<main>
    <div class="container-main">
        <div class="container-main-top"></div>
        <div class="container-main-bottom">
            @foreach ($comics as $item)
            <div class="product">
                <div class="container-img">
                    <img 
                        src="{{$item['thumb']}}"
                        alt="logo comics"
                    >
                </div>
                <h2>{{$item['series']}}</h2>
            </div>
            @endforeach
        </div>
        <div class="container-loadmore">
            <h2>Load More</h2>
        </div>
        <div class="container-current-series">
            <h2>Current Series</h2>
        </div>
    </div>
</main>
@endsection