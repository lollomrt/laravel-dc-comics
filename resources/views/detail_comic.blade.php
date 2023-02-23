@extends ('layouts.app')

@section('content')
    <div class="container-fluid bg-primary py-3">
        <div class="container-detail d-flex">
            <div class="container-thumb">
                <img class="thumb" src="{{ $single['thumb'] }}" alt="{{ $single['title'] }}">
                <span class="lable">{{ $single['type'] }}</span>
                <span class="gallery text-center"><a href="#">view gallery</a></span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-detail py-5">
            <div class="row">
                <div class="col-8">
                    <h1>{{ $single['title'] }}</h1>
                    <div class="container-info d-flex justify-content-between my-3">
                        <div class="container-price d-flex justify-content-between w-75 p-3">
                            <span class="d-flex align-items-center"><span class="int me-1">U.S. Price: </span>{{ $single['price']}}</span>
                            <span class="int">available</span>
                        </div>
                        <div class="container-select w-25">
                            <select class="p-3" name="#" id="#">
                                <option value="1">check availability</option>
                                <option value="2">opzione 1</option>
                                <option value="3">opzione 2</option>
                                <option value="3">opzione 3</option>
                            </select>
                        </div>    
                    </div>
                    <p>{{ $single['description']}}</p>
                </div>
                <div class="col-4">
                    <div class="container-adv d-flex flex-column align-items-end">
                        <span>advertisement</span>
                        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-gray">
        <div class="container-detail pt-4 p-6">
            <div class="row">
                <div class="col-6 pe-4">
                    <div class="talent border-bottom pb-3">
                        <h2>Talent</h2>
                    </div>
                    <div class="staff-container d-flex justify-content-between border-bottom py-2">
                        <p class="w-25">Art By:</p>
                        <p class="w-75 url">{{ $single['artists'] }}</p>    
                    </div>
                    <div class="staff-container d-flex justify-content-between border-bottom py-2">
                        <p class="w-25">Written By:</p>
                        <p class="w-75 url">{{ $single['writers'] }}<p>    
                    </div>
                </div>
                <div class="col-6 ps-4">
                    <div class="talent border-bottom pb-3">
                        <h2>Specs</h2>
                    </div>
                    <div class="staff-container d-flex justify-content-between border-bottom py-2">
                        <p class="w-25">Series:</p>
                        <p class="w-75 url text-uppercase">{{ $single['series'] }}</p>    
                    </div>
                    <div class="staff-container d-flex justify-content-between border-bottom py-2">
                        <p class="w-25">U.S. Price:</p>
                        <p class="w-75">{{ $single['price'] }}<p>    
                    </div>
                    <div class="staff-container d-flex justify-content-between border-bottom py-2">
                        <p class="w-25 text-capitalize">one sale date</p>
                        <p class="w-75">{{ $single['sale_date'] }}<p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-gray border-top">
        <div class="container-detail">
            <div class="row">
                <div class="col-3 pe-4">
                    <div class="staff-container icons-cont d-flex justify-content-between border border-top-0 p-3">
                        <h3 class="w-50">Digital comics</h3>
                        <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">    
                    </div>
                </div>
                <div class="col-3 pe-4">
                    <div class="staff-container icons-cont d-flex justify-content-between border border-top-0 p-3">
                        <h3 class="w-50">shop dc</h3>
                        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">    
                    </div>
                </div>
                <div class="col-3 pe-4">
                    <div class="staff-container icons-cont d-flex justify-content-between border border-top-0 p-3">
                        <h3 class="w-50">comic shop locator</h3>
                        <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">    
                    </div>
                </div>
                <div class="col-3 pe-4">
                    <div class="staff-container icons-cont d-flex justify-content-between border border-top-0 p-3">
                        <h3 class="w-50">subscriptions</h3>
                        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection