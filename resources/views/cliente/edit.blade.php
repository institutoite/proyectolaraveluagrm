@extends('adminlte::page')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

@stop


@section('title', 'Cliente Editar')
@section('content')
    <div class="card">
        <div class="card-header bg-success">
           EDITAR CLIENTE
        </div>
        <div class="card-body">
            {{-- {{$cliente}} --}}
            <form action="{{route('cliente.update',$cliente)}}" method="POST">
                @method('PUT')
                @csrf
                @include('cliente.form')
            </form>
        </div>
    </div>
@stop

@section('js')
    
@stop