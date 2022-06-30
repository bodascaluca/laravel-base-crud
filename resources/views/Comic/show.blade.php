@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Dettagli Comic</h1>
        {{-- {{ dd($comics)}} --}}
        <h3> {{ $comics->title}} </h3>
        <img src="{{ $comics->thumb}} " alt="">
        <p>{{ $comics->description }}</p>
    </div>
@endsection