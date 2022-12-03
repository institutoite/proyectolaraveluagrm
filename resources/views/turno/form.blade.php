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
        <input class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre',$turno->nombre ?? '')}}" type="text" name="nombre" id="nombre">
        <label for="nombre">Ingrese nombre del turno</label>
    </div>
</div>

{{-- %%%%%%%%%%%%%%%%%%% FIN NOMBRE %%%%%%%%%%%%%%%%%%%%% --}}

{{-- %%%%%%%%%%%%%%%%%%% hora inicio %%%%%%%%%%%%%%%%%%%%% --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('horainicio'))
                <span class="text-danger"> {{ $errors->first('horainicio')}}</span>
            @endif
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-floating mb-3 text-gray">
            <input class="form-control @error('horainicio') is-invalid @enderror" value="{{old('horainicio',$turno->horainicio ?? '')}}" type="time" name="horainicio" id="horainicio">
            <label for="horainicio">Hora inicio</label>
        </div>
    </div>
{{-- %%%%%%%%%%%%%%%%%%% fin hora inicio %%%%%%%%%%%%%%%%%%%%% --}}
{{-- %%%%%%%%%%%%%%%%%%% hora fin %%%%%%%%%%%%%%%%%%%%% --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('horafin'))
                <span class="text-danger"> {{ $errors->first('horafin')}}</span>
            @endif
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-floating mb-3 text-gray">
            <input class="form-control @error('horafin') is-invalid @enderror" value="{{old('horafin',$turno->horafin ?? '')}}" type="time" name="horafin" id="horafin">
            <label for="horafin">Hora fin</label>
        </div>
    </div>
{{-- %%%%%%%%%%%%%%%%%%% fin hora inicio %%%%%%%%%%%%%%%%%%%%% --}}

<div class="container-fluid h-100 mt-3"> 
    <div class="row w-100 align-items-center">
        <div class="col text-center">
            <button type="submit" id="guardar" class="btn btn-success text-white btn-lg">Guardar <i class="far fa-save"></i></button>        
        </div>	
    </div>
</div>

