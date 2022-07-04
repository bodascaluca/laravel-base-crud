@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Dettagli Comic</h1>
        {{-- {{ dd($comics)}} --}}
        <h3> {{ $comics->title}} </h3>
        <h4>{{ $comics->price }}</h4>
        <h5>{{ $comics->series }}</h5>
        <h5>{{ $comics->sale_date }}</h5>
        <h5>{{ $comics->type }}</h5>

        <img src="{{ $comics->thumb}} " alt="">
        <p class="mb-4">{{ $comics->description }}</p>

        <a class="btn btn-primary" href="{{ route('Comics.edit', ['Comic'=>$comics->id])}}">Modifica</a>

        <form action="{{ route('Comics.destroy', [ 'Comic' => $comics->id ]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancella</button>
        </form>
    </div>
@endsection 