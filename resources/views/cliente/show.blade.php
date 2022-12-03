@extends('adminlte::page')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@stop


@section('title', 'Cliente Mostrar')
@section('content')
    <div class="card">
        <div class="card-header bg-success">
           MOSTRAR CLIENTE
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ATRIBUTO</th>
                        <th>VALOR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{$cliente->id}}</td>
                    </tr>
                    <tr>
                        <td>NOMBRE</td>
                        <td>{{$cliente->nombre}}</td>
                    </tr>
                    <tr>
                        <td>CI</td>
                        <td>{{$cliente->ci}}</td>
                    </tr>
                    <tr>
                        <td>DIRECCION</td>
                        <td>{{$cliente->direccion}}</td>
                    </tr>
                    <tr>
                        <td>TELEFONO</td>
                        <td>{{$cliente->telefono}}</td>
                    </tr>
                    <tr>
                        <td>CREADO</td>
                        <td>{{$cliente->created_at}}</td>
                    </tr>
                    <tr>
                        <td>ACTUALIZADO</td>
                        <td>{{$cliente->updated_at}}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    
@stop