<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/*1.- importar esta linea */
use Illuminate\Validation\Rule;

class UpdateProfesionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        /*2.- Crear el ob */
        $profesion=$this->route('profesion');
        return [
            'profesion'=>['required','max:20','min:5',Rule::unique('profesions')->ignore($profesion)],
        ];
    }
}
