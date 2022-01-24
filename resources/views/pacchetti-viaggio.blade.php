@extends('layouts.main')

@section('head-title', 'VP Travel | Pacchetti' )

@section('main-content')
    <div class="container-main flex packages-travel">
    <h1>Pacchetti di viaggio</h1>
    <h2>Top ten</h2>

    <ul class="list-travels list-style-none">
        @foreach ($travels as $travel)
        <li class="travel-item">
            {{$travel->name}}
        </li>
        @endforeach
    </ul>
</div>
@endsection