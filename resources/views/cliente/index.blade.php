@extends('adminlte::page')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('title', 'clientes')


@section('content')
    <div class="card">
        <div class="card-header bg-success">
            CLIENTES
             <div class="float-right">
                <a href="{{ route('cliente.create') }}" class="text-white btn btn-default bg-gradient-green float-right"  data-placement="left">
                    {{ __('Nuevo cliente') }}
                </a>
            </div>
        </div>
        <div class="card-body">

            <button class="btn btn-primary" type="button">Mostrar Modal</button>

            <button type="button" id="botonmodal"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Launch static backdrop modal
            </button>
            <button type="button" id="botonmodal2"  class="btn btn-primary" data-bs-toggle="modal">
                modal2
            </button>

            <table id="clientes" class="table table-bordered table-striped table-hover">
                <thead class="bg-success">
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>CARNET</th>
                        <th>TELEFONO</th>
                        <th>DIRECCION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    @include('cliente.modalMostrar')
    @include('cliente.modalshow')
    @include('cliente.modaleditar')


@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('js/codigo.js')}}"></script>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            
            $("table").on("click",".editar",function(e) {
                e.preventDefault();
                var id_cliente = $(this).closest('tr').attr("id");
                
                $.ajax({
                    url:"editarcliente/"+id_cliente,
                    success:function(dato) {
                        $("#modaleditar").modal("show");
                        $("#nombre").val(dato.nombre);
                        $("#nombre").val(dato.nombre);
                        $("#nombre").val(dato.nombre);
                        $("#nombre").val(dato.nombre);
                        $("#nombre").val(dato.nombre);
                        $("#nombre").val(dato.nombre);
                        $("#nombre").val(dato.nombre);
                    } 
                });


            })
            
            
            
            
            
            
            
            $("#botonmodal").on("click",function(){
                $("#staticBackdrop").modal("show");

            });
            $("#botonmodal2").on("click",function(){
                $("#modal2").modal("show");
            });
            $("#botonpie").on("click",function(){
                $("#modal2").modal("show");
            });
            
            $("table").on("click",'.modalshow',function(){

                idclienteClickado=$(this).closest('tr').attr('id');

                $.ajax({
				    url:"getcliente" ,
                    data:{
                        idcliente:idclienteClickado,
                    },
                    success: function(respuesta) {
                        $html="<table class='table table-bordered table-hover table-striped'>";
                        $html+="<thead class='bg-primary'>"
                        $html+="<tr><th>ATRIBUTO</th>"
                        $html+="<th>VALOR</th>"
                        $html+="</tr></thead>"
                        $html+="<tbody>"
                        $html+="<tr>"
                        $html+="<td>NOMBRE</td><td>"+respuesta.nombre+"</td>"
                        $html+="</tr>"

                        $html+="</tbody>"
                        
                        $html+="</table>"
                            
                        $(".modal-body").append($html);

                    },
                    error: function() {
                        console.log("Perdon hay un error");
                    },
                });

               
                $("#modalmostrarcliente").modal("show");
            });



            /*%%%%%%%%%%%%%%%%%%%%%%%% DATATABLE %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
            let tabla=$('#clientes').DataTable({
                "ajax":{
                    "url":"clientes/listar",
                },
                "createdRow": function( row, data, dataIndex ) {
                    $(row).attr('id',data['id']);
                },
                "columns": [
                    {data: 'id'},
                    {data: 'nombre'},
                    {data: 'ci'},
                    {data: 'telefono'},
                    {data: 'direccion'},
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
                var cliente_id=$(this).closest('tr').attr('id');
                console.log(cliente_id);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                 
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    console.log(result);
                    $.ajax({
                        url: 'cliente/eliminar',
                        type: 'DELETE',
                        data: {
                            id: cliente_id,
                            _token: $("meta[name='csrf-token']").attr("content"),
                        },
                        success: function (result) {
                            //console.log(result);
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

{{-- 
/*
 console.log(result+"res");
                    if (result.value) {
                        $.ajax({
                            url: 'cliente/eliminar/cliente',
                            type: 'DELETE',
                            data: {
                                id: cliente_id,
                                _token: $("meta[name='csrf-token']").attr("content"),
                            },
                            success: function (result) {
                                console.log(result);
                                tabla.ajax.reload();
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                console.log("Error");
                            }
                        });
                    } else {
                        console.log("No se pude eliminar");
                    }
*/ --}}