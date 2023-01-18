@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.aside')
            <div class="col-10">
                <h3 class="text-center py-4">I MIEI PROGETTI</h3>
                <div class="text-center pb-4">
                    <a class="btn btn-success" href="{{ route('admin.projects.create') }}">AGGIUNGI PROGETTO</a>
                </div>


                <table class="table table-striped w-75 m-auto">
                    <thead>
                        <tr>
                            <th scope="col">NOME</th>
                            <th scope="col">NOME CLIENT</th>
                            <th scope="col">AZIONI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($my_projects as $project)
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->client_name }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.projects.show', $project) }}"><i
                                            class="fa-regular fa-eye"></i></a>
                                    <a class="btn btn-warning mx-2" href="{{ route('admin.projects.edit', $project) }}"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <h4>Nessun progetto presente.</h4>
                        @endforelse
                    </tbody>
                </table>

                <div class="pt-3 d-flex justify-content-center">
                    {{ $my_projects->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
