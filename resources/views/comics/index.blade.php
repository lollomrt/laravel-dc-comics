@extends('layouts.app')

@section('content')
    <main class="back-dark">
        <div class="container-cards position">
            <span class="label-blue">Current series</span>
            <a class="assoluto" href="{{ route('comics.create')}}"><button class="btn btn-light border-button text-uppercase px-5">aggiungi nuovo comic</button></a>
            <div class="row d-flex gap-5 flex-column align-items-center">
                <div class="col d-flex flex-wrap justify-content-start gap-1-rem w-100">
                    @foreach($comics as $comic)
                    <a class="d-content" href="{{route('comics.show', ['comic' => $comic['id']])}}">
                        <div class="card card-styled border-0 back-dark text-white position-relative">
                            <img src="{{ $comic['thumb']}}" alt="">
                            <h6 class="my-2">{{ $comic['title']}}</h6>
                            <div class="d-flex flex-column gap-1 m-1 hover-btn position-absolute positioning">
                                <a class="btn btn-sm btn-warning" href="{{ route('comics.edit', ['comic' => $comic['id']])}}"><i class="fa-solid fa-pencil"></i></a>
                                <a class="btn btn-sm btn-danger" href="#"><i class="fa-solid fa-trash-can"></i></a>
                            </div>
                        </div>
                    </a>
                    
                    {{-- <a href="{{route('single-comic', ['slug' => $comic['slug']])}}">
                        
                    </a> --}}
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