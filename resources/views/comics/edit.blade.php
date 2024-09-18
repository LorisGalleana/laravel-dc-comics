{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@vite('resources/scss/edit.scss')



@section('content')
<div class="container my-5 bg-white">
    <h1>Modifica di: {{ $comic->title }} </h1>
    <form class="py-5" action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo fumetto</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Immagine fumetto</label>
            <input type="text" class="form-control" id="src" name="thumb" placeholder="Percorso immagine" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione fumetto</label>
            <textarea class="form-control" id="description" cols="30" rows="5" name="description" placeholder="Descrizione" >{{ $comic->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Titolo fumetto</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie fumetto</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data uscita fumetto</label>
            <input type="date" class="form-control" id="date" name="sale_date" placeholder="data di uscita" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo fumetto</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Tipo" value="{{ $comic->type }}">
        </div>
        <div class="mb-3">
            <button type="submit" href="#" class="btn btn-success">Aggiorna</button>
            <button type="reset" href="#" class="btn btn-warning">Annulla</button>
        </div>
    </form>


@endsection


@section('titlePage')
    Nuovo Fumetto
@endsection
