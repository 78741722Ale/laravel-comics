@extends('layouts.app')


@section('content')
        <!-- Prova titoli -->
        @forelse ($comics as $comic)
            <h1>{{$comic['title']}}</h1>
            @empty
            <p>Vuoto</p>
        @endforelse
@endsection
