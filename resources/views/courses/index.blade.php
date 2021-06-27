@extends('layouts.app')

@section('content')
<div class="container">
    <p class="fs-3 text-center mb-4">Cursos disponibles</p>
    <div class="row">
        @foreach ($courses as $course)    
            <div class="col-md-4 col-lg-3">
                <div class="card mb-3">
                    <img src="https://www.onlinecoursereport.com/wp-content/uploads/2020/07/shutterstock_394793860-768x588.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge bg-secondary"><i class="{{ $course->category->icon }}"> </i> {{ $course->category->name }}</span></h1>
                        <p class="card-text text-uppercase fs-5 fw-bold">
                            {{ $course->name }}
                        </p>
                        <p class="card-text text-truncate">
                            {{ $course->description }}
                        </p>
                        <div class="d-grid gap-2">
                            <a href="{{ route('course.show', ['id' => $course->id]) }}" role="button" class="btn btn-primary" style="color: white;">Ir al curso</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection