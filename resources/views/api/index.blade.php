@extends('layouts.app')

@section('content')
<div class="container">
    <p class="fs-3 text-center mb-4">Lista de peliculas</p>
    <div class="row">
        @foreach ($movies as $movie)    
            <div class="col-md-4 col-lg-3">
                <div class="card mb-3">
                    <img src="{{ config('apimovies.image_base_path').$movie['poster_path'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-uppercase fs-5 fw-bold">
                            {{ $movie['title'] }}
                        </p>
                        <p class="card-text text-truncate">
                            {{ $movie['overview'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection