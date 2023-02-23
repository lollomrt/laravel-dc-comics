<header class="container-fluid g-0">
    <div class="h-25 container-fluid w-100 text-bg-primary py-1">
        <nav class="h-100 container-cards d-flex justify-content-end align-items-center">
            <ul class="list-unstyled d-flex m-0 gap-5 h-100">
                <li class="border-0">dc power visa</li>
                <li class="border-0">Additional Dc sites</li>
            </ul>
        </nav>
    </div>
    <div class="container-cards d-flex justify-content-between align-items-center main-head">
        <img class="logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=la molisana>
        <nav class="h-100">
            <ul class="list-unstyled d-flex m-0 gap-5 h-100">
                <li class=" {{ Route::currentRouteName() == 'homepage' ? 'active' : ''}} ">
                    <a href="{{ route('homepage')}}">Home</a>               
                </li>
                <li>Characters</li>
                {{-- <li class=" {{ Route::currentRouteName() == 'comics' ? 'active' : ''}} ">
                    <a href="{{ route('comics')}}">Comics</a>               
                </li> --}}
                <li>Movies</li>
                <li>Tv</li>
                <li>Games</li>
                <li>Collections</li>
                <li>Videos</li>
                <li>Fans</li>
                <li>News</li>
                <li>shop</li>
            </ul>
        </nav>
    </div>
    <div class="container-fluid g-0 jumbo">
        <img class="img-jumbo" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="la molisana">
    </div>
</header>