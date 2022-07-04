@extends('layouts.app ')

@section('main_content')
    <div class="container">

        <h1>Create Post</h1>
        @if ($errors->any())
        {{-- {{ dd($errors->all()) }} --}}
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('Comics.store')}}" method="post">
            @csrf

            <div class="mb-3">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ old('title')}}">
            </div>

            <div class="mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Immagine" value="{{ old('thumb')}}">
            </div>

            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{ old('price')}}">
            </div>

            <div class="mb-3">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{ old('series')}}">
            </div>

            <div class="mb-3">
                <label for="sale_date">Data di rilascio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Serie" value="{{ old('sale_date')}}">
            </div>

            <div class="mb-3">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tipo" value="{{ old('type')}}">
            </div>

            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrizione">{{ old('description')}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
    </div>
@endsection