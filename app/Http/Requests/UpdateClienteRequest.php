<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
        return [
            'nombre'=>'required|max:75|min:5',
            'ci'=>'required|max:10|min:5',
            'direccion'=>'required|max:100|min:10',
            'telefono'=>'required|max:10|min:8',
        ];
    }
}
