@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center py-5">Ciao {{ Auth::user()->name }}, SEI LOGGATO!</h1>
        </div>
    </div>
@endsection
