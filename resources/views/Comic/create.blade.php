@extends('layouts.app ')

@section('main_content')
    <div class="container">
        <h1>Crea una nuova pasta</h1>


        <form action="{{ route('Comics.store')}}" method="post">
            @csrf

            <div class="mb-3">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
            </div>

            <div class="mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Immagine">
            </div>

            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
            </div>

            <div class="mb-3">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
            </div>

            <div class="mb-3">
                <label for="sale_date">Data di rilascio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Serie">
            </div>

            <div class="mb-3">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tipo">
            </div>

            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrizione"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
    </div>
@endsection