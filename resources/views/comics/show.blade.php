@extends ('layouts.app')


@section('title', 'Dettaglio Fumetto')

@section('content')
<div class="container">

     
     <div class="row">

     </div>
     <div class="col">
        <h1>{{$comic->title}}</h1>
     </div>

     <div class="row">
         <div class="">
             <br>
             <br>
             <br>
             <img src="{{$comic->image}}" alt="">
         </div>
         <div class="col-md-12">
             <br>
             <p>{{$comic->description}}</p>

         </div>
         
     </div>
</div>


@endsection