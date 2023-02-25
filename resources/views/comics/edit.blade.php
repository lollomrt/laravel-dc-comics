@extends('layouts.app')

@section('content')
    <main class="">
        <div class="container-fluid bg-primary">
            <div class="container-cards position">
                <div class="row d-flex gap-5 flex-column align-items-center">
                    <div class="col d-flex flex-wrap gap-1-rem">
                        <div class="bg-primary text-white w-100 d-flex justify-content-between">
                            <h1><i class="fa-solid fa-pencil"></i> Modifica il fumetto selezionato</h1>
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
                        <div class="container-fluid p-0">    
                            @if($errors->any())
                            <div class="alert alert-danger w-100">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif                                 
                        </div>
                        
                        <form action="{{ route('comics.update', $single->id)}}" method="POST" class="w-100 d-flex gap-3 flex-wrap">
                            @csrf
                            @method('PUT')
                            <div class="form-group width-2">
                                <label for="">Titolo</label>
                                <input type="text" name="title" class="form-control" placeholder="Inserisci il nome del comic ..." value="{{ old('title') ?? $single->title }}">
                                @error('title')
                                    <div class="text-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group width-2">
                                <label for="">Thumb</label>
                                <input type="text" name="thumb" class="form-control" placeholder="Inserisci l'url della thumb ..." value="{{ old('thumb') ?? $single->thumb }}">
                            </div>
                            <div class="form-group width-2">
                                <label for="">Series</label>
                                <input type="text" name="series" class="form-control" placeholder="Inserisci la serie di appartenenza ..." value="{{ old('series') ?? $single->series }}">
                                @error('series')
                                    <div class="text-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group width-2">
                                <label for="">Tipo</label>
                                <input type="text" name="type" class="form-control" placeholder="Inserisci il tipo del comic ..." value="{{ old('type') ?? $single->type }}">
                                @error('type')
                                    <div class="text-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group width-2">
                                <label for="">Data di uscita</label>
                                <input type="date" name="sale_date" class="form-control" placeholder="Inserisci il tipo del comic ..." value="{{ old('sale_date') ?? $single->sale_date }}">
                                @error('sale_date')
                                    <div class="text-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group width-2">
                                <label for="">Prezzo</label>
                                <input type="number" name="price" class="form-control" placeholder="Inserisci il prezzo ..." value="{{ old('price') ?? $single->price }}">
                                @error('price')
                                    <div class="text-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group w-100">
                                <label for="">Descrizione</label>
                                <textarea name="description" id="" cols="30" rows="4" class="form-control" placeholder="Inserisci descrizione ...">{!!nl2br(old('description') ?? $single->description) !!}</textarea>
                            </div>
                            <button class="btn btn-primary w-25" type="submit">Modifica Fumetto</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </main>
@endsection