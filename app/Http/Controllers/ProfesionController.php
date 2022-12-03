<?php

namespace App\Http\Controllers;

use App\Models\Profesion;
use App\Http\Requests\StoreProfesionRequest;
use App\Http\Requests\UpdateProfesionRequest;
use Yajra\DataTables\DataTables;

class ProfesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("profesion.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view("profesion.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfesionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfesionRequest $request)
    {
        $profesion= new Profesion();
        $profesion->profesion= $request->profesion;
        $profesion->save();
        return redirect()->route('profesions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesion  $profesion
     * @return \Illuminate\Http\Response
     */
    public function show(Profesion $profesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesion  $profesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesion $profesion)
    {
        return view('profesion.edit', compact('profesion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfesionRequest  $request
     * @param  \App\Models\Profesion  $profesion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfesionRequest $request, Profesion $profesion)
    {
        $profesion->profesion= $request->profesion;
        $profesion->save();
        return redirect()->route('profesions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesion  $profesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesion $profesion)
    {
        //
    }
    public function listar(){
        $profesiones= Profesion::get();
        return DataTables::of($profesiones)
                ->addColumn('btn','profesion.action')
                ->rawColumns(['btn'])
                ->toJson();
    }
}
