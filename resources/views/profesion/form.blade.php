{{-- <input  type="text" name="como" id="como"  class="form-control @error('como') is-invalid @enderror" value="{{old('como',$como->como ?? '')}}" autocomplete="off"> --}}

{{-- %%%%%%%%%%%%%%%%%%% PROFESION %%%%%%%%%%%%%%%%%%%%% --}}

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
        @if($errors->has('profesion'))
            <span class="text-danger"> {{ $errors->first('profesion')}}</span>
        @endif
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="form-floating mb-3 text-gray">
        <input class="form-control @error('profesion') is-invalid @enderror" value="{{old('profesion',$profesion->profesion ?? '')}}" type="text" name="profesion" id="profesion">
        <label for="profesion">Ingrese una profesion</label>
    </div>
</div>

{{-- %%%%%%%%%%%%%%%%%%% FIN PROFESION %%%%%%%%%%%%%%%%%%%%% --}}


<div class="container-fluid h-100 mt-3"> 
    <div class="row w-100 align-items-center">
        <div class="col text-center">
            <button type="submit" id="guardar" class="btn btn-success text-white btn-lg">Guardar <i class="far fa-save"></i></button>        
        </div>	
    </div>
</div>

