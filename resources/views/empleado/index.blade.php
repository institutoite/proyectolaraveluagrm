@extends('adminlte::page')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('title', 'Empleados')


@section('content')
    <div class="card">
        <div class="card-header bg-success">
            EMPLEADOS
             <div class="float-right">
                <a href="{{ route('empleado.create') }}" class="text-white btn btn-default bg-gradient-green float-right"  data-placement="left">
                    {{ __('Nuevo Empleado') }}
                </a>
            </div>
        </div>
        <div class="card-body">
            <table id="empleados" class="table table-bordered table-striped table-hover">
                <thead class="bg-success">
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>TELEFONO</th>
                        <th>DIRECCION</th>
                        <th>CARNET</th>
                        <th>FOTO</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            /*%%%%%%%%%%%%%%%%%%%%%%%% DATATABLE %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
            let tabla=$('#empleados').DataTable({
                "ajax":{
                    "url":"empleados/listar",
                },
                "createdRow": function( row, data, dataIndex ) {
                    $(row).attr('id',data['id']);
                    // $('td', row).eq(5).html("<img width='100' src='"+data["foto"] +"'>")
                },
                "columns": [
                    {data: 'id'},
                    {data: 'nombre'},
                    {data: 'telefono'},
                    {data: 'direccion'},
                    {data: 'carnet'},
                    {
                        "name": "foto",
                        "data": "foto",
                        "render": function (data, type, full, meta) {
                            return "<img class='materialboxed zoomify' src=\"{{URL::to('/')}}/storage/" + data + "\" height=\"50\"/>";
                        },
                        "title": "FOTO",
                        "orderable": false,
        
                    },  
                    {
                        "name":"btn",
                        "data": 'btn',
                    },
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
            });

            /*%%%%%%%%%%%%%%%%%%%%%%%% ELIMINAR %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
            $('table').on('click','.eliminar',function(){
                var turno_id=$(this).closest('tr').attr('id');
                console.log(turno_id);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                 
                Swal.fire({
                    title: 'Esta seguro de eliminar este registro?',
                    text: "Si elimina no podras recuperar jamas!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#179988',
                    cancelButtonColor: '#dd4512',
                    confirmButtonText: 'Si, Eliminar registro!'
                }).then((result) => {
                    
                    $.ajax({
                        url: 'turno/eliminar',
                        type: 'DELETE',
                        data: {
                            id: turno_id,
                            _token: $("meta[name='csrf-token']").attr("content"),
                        },
                        success: function (result) {
                            console.log(result);
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: result.mensaje,
                                showConfirmButton: false,
                                timer: 2000
                            });
                            tabla.ajax.reload();
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            console.log("Error");
                        }
                    });  
                    
                })

                
            });
        });
    </script>
@stop

