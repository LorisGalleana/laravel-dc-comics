{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@vite('resources/scss/show.scss')



@section('content')
<div class="container my-5 center">
    <h1>
        {{$comic->title}}
        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning" title="modifica"><i class="fa-solid fa-pencil"></i></a>
        @include('partials.formdelete')
    </h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" >
    <p>{{$comic->description}} </p>
    <div class="py-3">
        <a href="{{ route('comics.index') }}" class="btn btn-success">Torna all'elenco</a>
    </div>


@endsection


@section('titlePage')
    Elenco fumetti
@endsection
