@extends('layouts.app')

@section('content')
    <main class="back-dark">
        <div class="container-cards position">
            <span class="label-blue">Current series</span>
            <div class="row d-flex gap-5 flex-column align-items-center">
                <div class="col d-flex flex-wrap gap-1-rem w-100">
                    @foreach($comics as $comic)
                    <a href="{{route('single-comic', ['slug' => $comic['slug']])}}">
                        <div class="card card-styled border-0 back-dark text-white">
                            <img src="{{ $comic['thumb']}}" alt="">
                            <h6 class="my-2">{{ $comic['title']}}</h6>
                        </div>
                    </a>
                    @endforeach
                </div>
                <button class="btn btn-primary w-25 text-uppercase">load more</button>
            </div>
        </div>
        <div class="blue-section">
            <div class="container-blue">
                <div class="card-blue">
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <span class="icon-text">digital comics</span>
                </div>
                <div class="card-blue">
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <span class="icon-text">dc merchandise</span>
                </div>
                <div class="card-blue">
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <span class="icon-text">subscription</span>
                </div>
                <div class="card-blue">
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <span class="icon-text">comic shop locator</span>
                </div>
                <div class="card-blue">
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <span class="icon-text">dc power visa</span>
                </div>
            </div>
        </div>
    </main>
@endsection