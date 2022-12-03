<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Profesion;
use App\Models\Turno;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use Yajra\DataTables\DataTables;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("empleado.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $turnos=Turno::all();
        $profesions=Profesion::all();
        return view("empleado.create",compact("profesions",'turnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpleadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleadoRequest $request)
    {
        // dd($request->all());
        $empleado=new Empleado();
        $empleado->nombre=$request->nombre;
        $empleado->telefono = $request->telefono;
        $empleado->genero = $request->genero;
        $empleado->correo = $request->correo;
        $empleado->direccion = $request->direccion;
        $empleado->fechanacimiento = $request->fechanacimiento;
        $empleado->carnet= $request->carnet;
        if ($request->hasFile('foto')){
            $foto=$request->file('foto');
            $nombreImagen='imgempleados/'.trim($request->nombre).'.jpg';
            $imagen= Image::make($foto)->encode('jpg',75);
            $imagen->resize(300,300,function($constraint){
                $constraint->upsize();
            });
            Storage::disk('public')->put($nombreImagen, $imagen->stream());
            $empleado->foto = $nombreImagen;
        }
        $empleado->turno_id= $request->turno_id;
        $empleado->profesion_id= $request->profesion_id;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $turnos=Turno::all();
        $profesions=Profesion::all();
        return view('empleado.edit', compact('empleado','turnos','profesions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpleadoRequest  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    
    public function update(UpdateEmpleadoRequest $request, Empleado $empleado)
    {
        // dd($request->all());
        $empleado->nombre=$request->nombre;
        $empleado->telefono = $request->telefono;
        $empleado->genero = $request->genero;
        $empleado->correo = $request->correo;
        $empleado->direccion = $request->direccion;
        $empleado->fechanacimiento = $request->fechanacimiento;
        $empleado->carnet= $request->carnet;
        if ($request->hasFile('foto')){
            $foto=$request->file('foto');
            $nombreImagen='imgempleados/'.trim($request->nombre).'.jpg';
            $imagen= Image::make($foto)->encode('jpg',75);
            $imagen->resize(300,300,function($constraint){
                $constraint->upsize();
            });
            Storage::disk('public')->put($nombreImagen, $imagen->stream());
            $empleado->foto = $nombreImagen;
        }
        $empleado->turno_id= $request->turno_id;
        $empleado->profesion_id= $request->profesion_id;
        $empleado->save();
        
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
    public function listar(){
        $empleados= Empleado::get();
        return DataTables::of($empleados)
                ->addColumn('btn','empleado.action')
                ->rawColumns(['btn'])
                ->toJson();
    }


    
}
