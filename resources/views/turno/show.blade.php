@extends('adminlte::page')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@stop


@section('title', 'Truno Mostrar')
@section('content')
    <div class="card">
        <div class="card-header bg-success">
           MOSTRAR TURNO
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
                        <td>{{$turno->id}}</td>
                    </tr>
                    <tr>
                        <td>NOMBRE</td>
                        <td>{{$turno->nombre}}</td>
                    </tr>
                    <tr>
                        <td>HORAINICIO</td>
                        <td>{{$turno->horainicio}}</td>
                    </tr>
                    <tr>
                        <td>HORAFIN</td>
                        <td>{{$turno->horafin}}</td>
                    </tr>
                    
                    <tr>
                        <td>CREADO</td>
                        <td>{{$turno->created_at}}</td>
                    </tr>
                    <tr>
                        <td>ACTUALIZADO</td>
                        <td>{{$turno->updated_at}}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    
@stop