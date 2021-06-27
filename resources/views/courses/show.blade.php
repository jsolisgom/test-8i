@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('course') }}" class="btn btn-default">Volver</a> 
    <p class="fs-2 text-center mb-0">{{ $course->name }}</p>
    <p class="fs-5 text-center mb-4"> <i class="{{ $course->category->icon }}"></i> {{ $course->category->name }}</p>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul class="mb-0">
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-6">
                        <img src="https://www.onlinecoursereport.com/wp-content/uploads/2020/07/shutterstock_394793860-768x588.jpg" class="img-fluid" alt="..." style="max-height: 200px;">
                    </div>
                    <div class="col-md-6">
                        <p class="card-text">{{ $course->description }}</p>
                        
                        @if ($hasCourse)     
                            <p class="text-success">Curso adquirido</p>
                        @else
                            <p class="fs-4 mb-2">${{ $course->price }}</p>
                            <form action="{{ route('course.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $course->id}}">
                                <button type="submit" class="btn btn-success text-white">Comprar curso</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection