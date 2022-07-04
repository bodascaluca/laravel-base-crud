@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Dettagli Comic</h1>
        {{-- {{ dd($comics)}} --}}
        <h3> {{ $comics->title}} </h3>
        <img src="{{ $comics->thumb}} " alt="">
        <p class="mb-4">{{ $comics->description }}</p>

        <a class="btn btn-primary" href="{{ route('Comics.edit', ['Comic'=>$comics->id])}}">Modifica</a>
    </div>
@endsection 