@extends('layouts.app')

@section('main_content')
    <h1>Lista dei fumetti </h1>
    <ul>
        @foreach ($comics_list as $comic)
        {{-- {{ dd($comic) }} --}}
            <li>
                <h3> 
                    <a href="{{ route('Comics.show', ['Comic' => $comic->id] ) }}">
                        {{ $comic->title}} 
                    </a>
                </h3>
                <img src="{{ $comic->thumb}} " alt="">

            </li>
        @endforeach
    </ul>
@endsection

 