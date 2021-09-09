@extends ('layouts.app')


@section('title', 'Tutti i fumetti')

@section('content')

<div class="container">
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($comic as $comico)

    <tr>
      <th scope="row">{{$comico->id}}</th>
      <td>{{$comico->title}}</td>
      <td>{{$comico->type}}</td>
      <td>
        <a href="" class="btn btn-primary">Show</a>
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

<div>

{{$comic->links()}}

</div>


</div>


@endsection