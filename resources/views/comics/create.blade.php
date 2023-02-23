@extends('layouts.app')

@section('content')
    <main class="">
        <div class="container-fluid bg-primary">
            <div class="container-cards position">
                <div class="row d-flex gap-5 flex-column align-items-center">
                    <div class="col d-flex flex-wrap gap-1-rem">
                        <div class="bg-primary text-white w-100 d-flex justify-content-between">
                            <h1>Crea un nuovo fumetto nella lista</h1>
                            <a href="{{ route('comics.index')}}"><button class="btn btn-dark text-uppercase px-4">torna alla lista dei comics</button></a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="container-fluid">
            <div class="container-cards position">
                <div class="row d-flex gap-5 flex-column align-items-center">
                    <div class="col d-flex flex-wrap gap-1-rem"> 
                        <form action="{{ route('comics.store')}}" method="POST" class="w-100 d-flex gap-3 flex-wrap">
                            @csrf
                            <div class="form-group width-2">
                                <label for="">Titolo</label>
                                <input type="text" name="title" class="form-control" placeholder="Inserisci il nome del comic ...">
                            </div>
                            <div class="form-group width-2">
                                <label for="">Thumb</label>
                                <input type="text" name="thumb" class="form-control" placeholder="Inserisci l'url della thumb ...">
                            </div>
                            <div class="form-group width-2">
                                <label for="">Series</label>
                                <input type="text" name="series" class="form-control" placeholder="Inserisci la serie di appartenenza ...">
                            </div>
                            <div class="form-group width-2">
                                <label for="">Tipo</label>
                                <input type="text" name="type" class="form-control" placeholder="Inserisci il tipo del comic ...">
                            </div>
                            <div class="form-group width-2">
                                <label for="">Data di uscita</label>
                                <input type="date" name="sale_date" class="form-control" placeholder="Inserisci il tipo del comic ...">
                            </div>
                            <div class="form-group width-2">
                                <label for="">Prezzo</label>
                                <input type="number" name="price" class="form-control" placeholder="Inserisci il prezzo ...">
                            </div>
                            <div class="form-group w-100">
                                <label for="">Descrizione</label>
                                <textarea name="description" id="" cols="30" rows="4" class="form-control" placeholder="Inserisci descrizione ..."></textarea>
                            </div>
                            <button class="btn btn-primary w-25" type="submit">Crea Fumetto</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </main>
@endsection