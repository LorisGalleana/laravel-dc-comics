{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@vite('resources/scss/edit.scss')



@section('content')
<div class="container my-5 bg-white">
    <h1>Modifica di: {{ $comic->title }} </h1>


    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="py-5" action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo fumetto</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Titolo" value="{{ old('title', $comic->title) }}">
            @error('title')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Immagine fumetto</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="src" name="thumb" placeholder="Percorso immagine" value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione fumetto</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="5" name="description" placeholder="Descrizione" >{{ old('description', $comic->description) }}</textarea>
            @error('description')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Titolo fumetto</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Prezzo" value="{{ old('price', $comic->price) }}">
            @error('price')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie fumetto</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Serie" value="{{ old('series', $comic->series) }}">
            @error('series')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data uscita fumetto</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="date" name="sale_date" placeholder="data di uscita" value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo fumetto</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Tipo" value="{{ old('type', $comic->type) }}">
            @error('type')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" href="#" class="btn btn-success">Invia</button>
            <button type="reset" href="#" class="btn btn-warning">Annulla</button>
        </div>
    </form>


@endsection


@section('titlePage')
    Nuovo Fumetto
@endsection
