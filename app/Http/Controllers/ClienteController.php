<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Requests\Requestajax;
use App\Http\Requests\EliminarRequest;
use Yajra\DataTables\DataTables;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("cliente.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view("cliente.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = new Cliente();
        $cliente->nombre= $request->nombre;
        $cliente->ci= $request->ci;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->save();

        return redirect()->route("clientes.index");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->nombre=$request->nombre;
        $cliente->ci=$request->ci;
        $cliente->direccion=$request->direccion;
        $cliente->telefono=$request->telefono;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(EliminarRequest $request)
    {
        $cliente=Cliente::findOrFail($request->id);
        $cliente->delete();
        return response()->json(["mensaje"=>"El registro fue eliminado correctamente"]);

    }
    public function listar(){
        $clientes= Cliente::get();
        
        return DataTables::of($clientes)
                ->addColumn('btn','cliente.action')
                ->rawColumns(['btn'])
                ->toJson();
    }
    public function getCliente(Requestajax $request){
        $cliente=Cliente::findOrFail($request->idcliente);
        return response()->json($cliente);
    }
    public function editarCliente(Cliente $cliente){

        return response()->json($cliente);

    }
}
