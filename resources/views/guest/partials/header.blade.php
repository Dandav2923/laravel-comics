<header>
    <div class="container-header">
        <img src="{{asset('img/dc-logo.png')}}" alt="">
        <ul class="container-link">
            <li><a class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('characters')}}">Charatters</a>
            </li>
            <li><a class="{{ 'home' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('home')}}">Comics</a>
            </li>
            <li><a href="#">Movies</a>
            </li>
            <li><a href="#">Tv</a>
            </li>
            <li><a href="#">Games</a>
            </li>
            <li><a href="#">Collectibles</a>
            </li>
            <li><a href="#">Videos</a>
            </li>
            <li><a href="#">Fans</a>
            </li>
            <li><a href="#">News</a>
            </li>
            <li><a href="#">Shop</a>
            </li>
        </ul>
    </div>
</header>