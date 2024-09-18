{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@vite('resources/scss/index.scss')



@section('content')
<div class="container my-5">
    @if (@session('deleted'))
        <div class="alert alert-success" role="alert">
            {{session('deleted')}}
        </div>
    @endif


    <h1 class="shadow">Elenco Fumetti</h1>
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
                    <td>
                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-success" title="vedi"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning" title="modifica"><i class="fa-solid fa-pencil"></i></a>
                        @include('partials.formdelete')

                    </td>

                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection


@section('titlePage')
    Elenco fumetti
@endsection
