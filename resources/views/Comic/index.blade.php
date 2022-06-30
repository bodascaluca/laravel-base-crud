@extends('layouts.app')

@section('main_content')
    <h1>Lista dei fumetti </h1>
    <ul>
        @foreach ($comics_list as $comic)
            <li>
                <h3> {{ $comic->title}} </h3>
                <img src="{{ $comic->thumb}} " alt="">

            </li>
        @endforeach
    </ul>
@endsection

 