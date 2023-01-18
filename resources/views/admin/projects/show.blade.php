@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.aside')
            <div class="col-10">
                <div class="card m-auto mt-5" style="width: 30rem;">
                    <img src="{{ $project->cover_image }}" class="card-img-top thumb" alt="{{ $project->name }}">
                    <div class="card-body">
                        <h5 class="card-title text-center py-3">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->summary }}</p>
                        <div class="d-flex justify-content-center py-3">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning mx-3">MODIFICA</a>
                            <form onsubmit="return confirm('Confermi l\'eliminazione di {{ $project->name }} ?')"
                                class="d-inline" method="POST" action="{{ route('admin.projects.destroy', $project) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">ELIMINA</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    {{ $project->name }}
@endsection