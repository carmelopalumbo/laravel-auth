@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.aside')
            <div class="col-10">
                <div class="card m-auto mt-5" style="width: 30rem;">
                    <img src="{{ $project->cover_image }}" class="card-img-top" alt="{{ $project->name }}">
                    <div class="card-body">
                        <h5 class="card-title text-center py-3">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->summary }}</p>
                        <div class="d-flex justify-content-center py-3">
                            <a href="#" class="btn btn-warning mx-3">MODIFICA</a>
                            <a href="#" class="btn btn-danger">ELIMINA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
