{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@vite('resources/scss/create.scss')



@section('content')
<div class="container my-5 bg-white">
    <h1>Nuovo fumetto</h1>
    <form class="py-5" action="#" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo fumetto</label>
            <input type="text" class="form-control" id="title" placeholder="Titolo" >
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Immagine fumetto</label>
            <input type="text" class="form-control" id="src" placeholder="Percorso immagine" >
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione fumetto</label>
            <textarea class="form-control" id="description" cols="30" rows="5" placeholder="Descrizione" ></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Titolo fumetto</label>
            <input type="text" class="form-control" id="price" placeholder="Prezzo" >
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie fumetto</label>
            <input type="text" class="form-control" id="series" placeholder="Serie" >
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data uscita fumetto</label>
            <input type="date" class="form-control" id="title" placeholder="data di uscita" >
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo fumetto</label>
            <input type="text" class="form-control" id="type" placeholder="Tipo" >
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
