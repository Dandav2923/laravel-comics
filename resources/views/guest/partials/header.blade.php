<header>
    <div class="container-header">
        <img src="{{asset('img/dc-logo.png')}}" alt="">
        <ul class="container-link">
            <li><a class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('characters')}}">Charatters</a>
            </li>
            <li><a class="{{ 'home' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('home')}}">Comics</a>
            </li>
            <li><a class="{{ 'movies' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('movies')}}">Movies</a>
            </li>
            <li><a class="{{ 'tv' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('tv')}}">Tv</a>
            </li>
            <li><a class="{{ 'games' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('games')}}">Games</a>
            </li>
            <li><a class="{{ 'collectables' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('collectables')}}">Collectibles</a>
            </li>
            <li><a class="{{ 'videos' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('videos')}}">Videos</a>
            </li>
            <li><a class="{{ 'fans' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('fans')}}">Fans</a>
            </li>
            <li><a class="{{ 'news' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('news')}}">News</a>
            </li>
            <li><a class="{{ 'shop' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('shop')}}">Shop</a>
            </li>
        </ul>
    </div>
</header>