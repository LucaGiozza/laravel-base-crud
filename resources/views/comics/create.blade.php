@extends('layouts.app')


@section('title','creazione comics')

@section('content')
<div class="container mt-3">

  <h2 class="mb-5">Digita il tuo comics</h2>

<form>
  <div class="mb-3">
    <label for="titolos" class="form-label">Titolo</label>
    <input type="text" name="title" class="form-control" id="titolos">

  </div>
  <div class="mb-3">
    <label for="types" class="form-label">Genere</label>
    <input type="text" name="type" class="form-control" id="types">
  </div>

  <div class="mb-3">
    <label for="authors" class="form-label">Autore</label>
    <input type="text" name="author" class="form-control" id="authors">
  </div>

  <div class="mb-3">
    <label for="years" class="form-label">Anno</label>
    <input type="text" name="year" class="form-control" id="years">
  </div>

  <div class="mb-3">
    <label for="descriptions" class="form-label">Descrizione</label>
    <input type="text" name="description" class="form-control" id="descriptions">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

@endsection