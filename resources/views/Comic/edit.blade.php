@extends('layouts.app')

@section('main_content')

    <div class="container">

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

        <h1>modifica pasta </h1>
        {{-- {{ dd($comic_to_update) }} --}}
        <form action="{{ route('Comics.update', ['Comic'=> $comic_to_update->id])}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{  old('title') ? old('title') :  $comic_to_update->title }}">
            </div>
    
            <div class="form-group mb-3">
                <label for="type">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tipologia" value="{{  old('type') ? old('type') :  $comic_to_update->type }}">
            </div>
    
            <div class="form-group mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Immagine" value="{{  old('thumb') ? old('thumb') :  $comic_to_update->thumb }}">
            </div>

            <div class="form-group mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="prezzo" value="{{  old('price') ? old('price') :  $comic_to_update->price }}">
            </div>

            <div class="form-group mb-3">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{  old('series') ? old('series') :  $comic_to_update->series }}">
            </div>

            <div class="form-group mb-3">
                <label for="sale_date">Data usita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Data usita" value="{{  old('sale_date') ? old('sale_date') :  $comic_to_update->sale_date }}">
            </div>
            
            <div class="form-group mb-3">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descrizione" value="{{  old('description') ? old('description') :  $comic_to_update->description }}">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
   
@endsection