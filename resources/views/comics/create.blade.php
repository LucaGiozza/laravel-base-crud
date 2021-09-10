@extends('layouts.app')


@section('title','creazione comics')

@section('content')
<div class="container mt-2">

  <h2 class="mb-5">Digita il tuo comics</h2>

<form action="{{route('comics.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="titolos" class="form-label">Titolo</label>
    <input type="text" name="title" class="form-control" id="titolos">

  </div>
  <div class="mb-3">
    <label for="types" class="form-label">Genere</label>
    <select name="type" id="types" class="form-control">
        <option value="comic book">comic book</option>
        <option value="graphic novel">graphic novel</option>
       



    </select>
    
  </div>

  <div class="mb-3">
    <label for="authors" class="form-label">Autore</label>
    <input type="text" name="author" class="form-control" id="authors">
  </div>
  <div class="mb-3">
    <label for="images" class="form-label">Immagine</label>
    <input type="text" name="image" class="form-control" id="images">
  </div>

  <div class="mb-3">
    <label for="years" class="form-label">Anno</label>
    <input type="text" name="year" class="form-control" id="years">
  </div>

  <div class="mb-3">
    <label for="descriptions" class="form-label">Descrizione</label>
    <textarea name="description" id="descriptions" cols="140" rows="10"></textarea>
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

@endsection