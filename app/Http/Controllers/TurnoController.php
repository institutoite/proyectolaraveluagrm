<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Http\Requests\StoreTurnoRequest;
use App\Http\Requests\UpdateTurnoRequest;
use App\Http\Requests\EliminarRequest;
use Yajra\DataTables\DataTables;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("turno.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('turno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTurnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTurnoRequest $request)
    {
        $turno=new Turno();
        $turno->nombre = $request->nombre;
        $turno->horainicio = $request->horainicio;
        $turno->horafin = $request->horafin;
        $turno->save();
        return redirect()->route('turnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function show(Turno $turno)
    {
        return view('turno.show', compact('turno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function edit(Turno $turno)
    {
        return view('turno.edit', compact('turno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTurnoRequest  $request
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurnoRequest $request, Turno $turno)
    {
        $turno->nombre = $request->nombre;
        $turno->horainicio = $request->horainicio;
        $turno->horafin = $request->horafin;
        $turno->save();
        return redirect()->route('turnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy(EliminarRequest $request)
    {
        $turno=Turno::findOrFail($request->id);
        $turno->delete();
        return response()->json(['mensaje' => "Registro eliminado correctamente",'turno'=>$turno]);
    }
    public function listar(){
        $turnos= Turno::get();
        return DataTables::of($turnos)
                ->addColumn('btn','turno.action')
                ->rawColumns(['btn'])
                ->toJson();
    }
}
