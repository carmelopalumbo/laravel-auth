@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.aside')
            <div class="col-10">
                <h1 class="text-center py-5">Ciao {{ Auth::user()->name }}, SEI LOGGATO!</h1>
                <p class="text-center">Questa è la home della dashboard</p>
            </div>
        </div>
    </div>
@endsection
