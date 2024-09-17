{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@vite('resources/scss/index.scss')



@section('content')
<div class="container my-5">
    <h1>Elenco Fumetti</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic )
                <tr>
                    <td>{{$comic->id}}</td>
                    <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="thumbnail"></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td><a href="{{ route('comics.show', $comic) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a> </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection


@section('titlePage')
    Elenco fumetti
@endsection
