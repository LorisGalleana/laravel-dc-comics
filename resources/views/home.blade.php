{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
<div class="container my-5 bg-white p-3">
    <h1>{{$title}} </h1>

    <h3>
        Nella libreria sono presenti {{$num_comics}} fumetti
    </h3>
    <h4>
        Ultimo fumetto inserito: {{$last_comic_title}}
    </h4>
</div>

@endsection


@section('titlePage')
    home
@endsection
