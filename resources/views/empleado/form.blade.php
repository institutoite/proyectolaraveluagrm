
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
        <input class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre',$empleado->nombre ?? '')}}" type="text" name="nombre" id="nombre">
        <label for="nombre">Ingrese nombre del empleado</label>
    </div>
</div>

<div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
            <div class="form-floating mb-3 text-gray">
                <input class="form-control @error('telefono') is-invalid @enderror" value="{{old('telefono',$empleado->telefono ?? '')}}" type="phone" name="telefono" id="telefono">
                <label for="telefono">Telefono</label>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
            <div class="form-floating mb-3 text-gray">
                <select class="form-control @error('genero') is-invalid @enderror" name="genero" id="genero">
                    <option value=""> Elija tu género</option>
                    @isset($empleado)
                        @if(isset($empleado->genero))
                            @if($empleado->genero=="MUJER")
                                <option value="{{ $empleado->genero }}" {{ "MUJER"==$empleado->genero ? 'selected':''}} >{{ $empleado->genero }}</option>
                                <option value="HOMBRE">HOMBRE</option>
                            @else
                                <option value="{{ $empleado->genero }}" {{ "HOMBRE"==$empleado->genero ? 'selected':''}} >{{ $empleado->genero }}</option>
                                <option value="MUJER" >MUJER</option>
                            @endif
                        @else  
                            <option value="MUJER" @if(old('genero') == 'MUJER') {{'selected'}} @endif>MUJER</option>
                            <option value="HOMBRE" @if(old('genero') == 'HOMBRE') {{'selected'}} @endif>HOMBRE</option>
                        @endif 
                    @else
                        <option value="MUJER" @if(old('genero') == 'MUJER') {{'selected'}} @endif>MUJER</option>
                        <option value="HOMBRE" @if(old('genero') == 'HOMBRE') {{'selected'}} @endif>HOMBRE</option>
                    @endisset    
                </select>
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" >
            <div class="form-floating mb-3 text-gray">
                <input class="form-control @error('fechanacimiento') is-invalid @enderror" value="{{old('fechanacimiento',$empleado->fechanacimiento ?? '')}}" type="date" name="fechanacimiento" id="fechanacimiento">
                <label for="fechanacimiento">Ingrese fechanacimiento del empleado</label>
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" >
        <div class="form-floating mb-3 text-gray">
            <input class="form-control @error('carnet') is-invalid @enderror" value="{{old('carnet',$empleado->carnet ?? '')}}" type="text" name="carnet" id="carnet">
            <label for="carnet">Ingrese carnet del empleado</label>
        </div>
    </div>
</div>

{{-- %%%%%%%%%%%%%%%%%%% FIN NOMBRE %%%%%%%%%%%%%%%%%%%%% --}}

{{-- %%%%%%%%%%%%%%%%%%% hora telefono %%%%%%%%%%%%%%%%%%%%% --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('telefono'))
                <span class="text-danger"> {{ $errors->first('telefono')}}</span>
            @endif
        </div>
    </div> 
    
{{-- %%%%%%%%%%%%%%%%%%% fin telefono %%%%%%%%%%%%%%%%%%%%% --}}

{{-- %%%%%%%%%%%%%%%%%%% correo %%%%%%%%%%%%%%%%%%%%% --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('correo'))
                <span class="text-danger"> {{ $errors->first('correo')}}</span>
            @endif
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-floating mb-3 text-gray">
            <input class="form-control @error('correo') is-invalid @enderror" value="{{old('correo',$empleado->correo ?? '')}}" type="email" name="correo" id="correo">
            <label for="correo">correo</label>
        </div>
    </div>
{{-- %%%%%%%%%%%%%%%%%%% fin correo %%%%%%%%%%%%%%%%%%%%% --}}



{{-- %%%%%%%%%%%%%%%%%%% direccion %%%%%%%%%%%%%%%%%%%%% --}}

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
        @if($errors->has('direccion'))
            <span class="text-danger"> {{ $errors->first('direccion')}}</span>
        @endif
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="form-floating mb-3 text-gray">
        <input class="form-control @error('direccion') is-invalid @enderror" value="{{old('direccion',$empleado->direccion ?? '')}}" type="text" name="direccion" id="direccion">
        <label for="direccion">Ingrese direccion del empleado</label>
    </div>
</div>

{{-- %%%%%%%%%%%%%%%%%%% FIN DIRECCION %%%%%%%%%%%%%%%%%%%%% --}}

{{-- %%%%%%%%%%%%%%%%%%% GENERO %%%%%%%%%%%%%%%%%%%%% --}}

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
        @if($errors->has('genero'))
            <span class="text-danger"> {{ $errors->first('genero')}}</span>
        @endif
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="form-floating mb-3 text-gray">
        
    </div>
</div>

{{-- %%%%%%%%%%%%%%%%%%% FIN GENERO %%%%%%%%%%%%%%%%%%%%% --}}

{{-- %%%%%%%%%%%%%%%%%%% fechanacimiento %%%%%%%%%%%%%%%%%%%%% --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
        @if($errors->has('fechanacimiento'))
            <span class="text-danger"> {{ $errors->first('fechanacimiento')}}</span>
        @endif
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="form-floating mb-3 text-gray">
       
    </div>
</div>
{{-- %%%%%%%%%%%%%%%%%%% FIN fechanacimiento %%%%%%%%%%%%%%%%%%%%% --}}

{{-- %%%%%%%%%%%%%%%%%%% carnet %%%%%%%%%%%%%%%%%%%%% --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
        @if($errors->has('carnet'))
            <span class="text-danger"> {{ $errors->first('carnet')}}</span>
        @endif
    </div>
</div>

{{-- %%%%%%%%%%%%%%%%%%% FIN carnet %%%%%%%%%%%%%%%%%%%%% --}}

{{-- %%%%%%%%%%%%%%%%%%% foto %%%%%%%%%%%%%%%%%%%%% --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
        @if($errors->has('foto'))
            <span class="text-danger"> {{ $errors->first('foto')}}</span>
        @endif
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
    <div class="form-floating mb-3 text-gray">
        <input class="form-control @error('foto') is-invalid @enderror" value="{{old('foto',$empleado->foto ?? '')}}" type="file" name="foto" id="foto">
        <label for="foto">Ingrese foto del empleado</label>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="form-floating mb-3 text-gray">
        
        @isset($empleado)
        <img src="{{URL::to('/')}}/storage/{{$empleado->foto}}" width="100" alt="">
        @endisset

    </div>
</div>
{{-- %%%%%%%%%%%%%%%%%%% FIN carnet %%%%%%%%%%%%%%%%%%%%% --}}


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-floating mb-3 text-gray">
            <select class="form-control @error('turno_id') is-invalid @enderror" data-old="{{ old('turno_id') }}" name="turno_id" id="turno_id">
                <option value="">Elija un turno</option>
                @foreach ($turnos as $turno)
                    @isset($empleado)     
                        <option  value="{{$turno->id}}" {{$turno->id==$empleado->turno_id ? 'selected':''}}>{{$turno->nombre}}</option>     
                    @else
                        <option value="{{ $turno->id }}" {{ old('turno_id') == $turno->id ? 'selected':'' }} >{{ $turno->nombre }}</option>
                    @endisset 
                @endforeach
            </select>
            <label for="pais">Elija turno*</label>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-floating mb-3 text-gray">
            <select class="form-control @error('profesion_id') is-invalid @enderror" data-old="{{ old('profesion_id') }}" name="profesion_id" id="profesion_id">
                <option value="">Elija una profecion</option>
                @foreach ($profesions as $profesion)
                    @isset($empleado)     
                        <option  value="{{$profesion->id}}" {{$profesion->id==$empleado->profesion_id ? 'selected':''}}>{{$profesion->profesion}}</option>     
                    @else
                        <option value="{{ $profesion->id }}" {{ old('profesion_id') == $profesion->id ? 'selected':'' }} >{{ $profesion->profesion }}</option>
                    @endisset 
                @endforeach
            </select>
            <label for="pais">Elija profesion*</label>
        </div>
    </div>
    
</div>

<div class="container-fluid h-100 mt-3"> 
    <div class="row w-100 align-items-center">
        <div class="col text-center">
            <button type="submit" id="guardar" class="btn btn-success text-white btn-lg">Guardar <i class="far fa-save"></i></button>        
        </div>	
    </div>
</div>

