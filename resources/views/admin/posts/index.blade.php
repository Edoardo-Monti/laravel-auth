@extends('layouts.app')

@section('content')
<h1 class="text-center p-4">I Miei Post</h1>
<div class="container">
    <div class="row mx-auto g-4">
        @foreach ($posts as $elem)
        <div class="card mx-auto" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$elem->title}}</h5>
                <p class="card-text">{{$elem->description}}</p>
                <a href="#" class="btn btn-primary">Modifica</a>
                <a href="#" class="btn btn-primary">Elimina</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
