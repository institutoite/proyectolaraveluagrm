{{-- <input  type="text" name="como" id="como"  class="form-control @error('como') is-invalid @enderror" value="{{old('como',$como->como ?? '')}}" autocomplete="off"> --}}

{{-- %%%%%%%%%%%%%%%%%%% NOMBRE %%%%%%%%%%%%%%%%%%%%% --}}

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
        @if($errors->has('nombre'))
            <span class="text-danger"> {{ $errors->first('nombre')}}</span>
        @endif
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="form-floating mb-3 text-gray">
        <input class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre',$cliente->nombre ?? '')}}" type="text" name="nombre" id="nombre">
        <label for="nombre">Ingrese su nombre</label>
    </div>
</div>

{{-- %%%%%%%%%%%%%%%%%%% FIN NOMBRE %%%%%%%%%%%%%%%%%%%%% --}}



{{-- %%%%%%%%%%%%%%%%%%% inicio CI %%%%%%%%%%%%%%%%%%%%% --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('ci'))
                <span class="text-danger"> {{ $errors->first('ci')}}</span>
            @endif
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-floating mb-3 text-gray">
            <input class="form-control @error('ci') is-invalid @enderror" value="{{old('ci',$cliente->ci ?? '')}}" type="text" name="ci" id="ci">
            <label for="ci">Ingrese su carnet</label>
        </div>
    </div>
{{-- %%%%%%%%%%%%%%%%%%% fin CI %%%%%%%%%%%%%%%%%%%%% --}}


{{-- %%%%%%%%%%%%%%%%%%% inicio DIRECCION %%%%%%%%%%%%%%%%%%%%% --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('direccion'))
                <span class="text-danger"> {{ $errors->first('direccion')}}</span>
            @endif
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-floating mb-3 text-gray">
            <input class="form-control @error('direccion') is-invalid @enderror" value="{{old('direccion',$cliente->direccion ?? '')}}" type="text" name="direccion" id="direccion">
            <label for="direccion">Ingrese direccion</label>
        </div>
    </div>
{{-- %%%%%%%%%%%%%%%%%%% FIN DIRECCION %%%%%%%%%%%%%%%%%%%%% --}}

{{-- %%%%%%%%%%%%%%%%%%% inicio TELEFONO %%%%%%%%%%%%%%%%%%%%% --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('telefono'))
                <span class="text-danger"> {{ $errors->first('telefono')}}</span>
            @endif
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-floating mb-3 text-gray">
            <input class="form-control @error('telefono') is-invalid @enderror" value="{{old('telefono',$cliente->telefono ?? '')}}" type="number" name="telefono" id="telefono">
            <label for="telefono">Ingrese telefono</label>
        </div>
    </div>

{{-- %%%%%%%%%%%%%%%%%%% FIN DIRECCION %%%%%%%%%%%%%%%%%%%%% --}}









  
 


<div class="container-fluid h-100 mt-3"> 
    <div class="row w-100 align-items-center">
        <div class="col text-center">
            <button type="submit" id="guardar" class="btn btn-success text-white btn-lg">Guardar <i class="far fa-save"></i></button>        
        </div>	
    </div>
</div>

