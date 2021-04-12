<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class equipsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'Nombre_Equipo' => 'required | max:255',
            'Categoria' => 'required | max:255',
            'entrenador' => 'required | max:255',
            'phone_number' => 'required | max:255',
        ];
    }
    public function attributes() {
        return [
            'Nombre_Equipo' => 'Nombre_Equipo',
            'Categoria' => 'categoria',
            'entrenador' => 'entrenador',
            'phone_number' => 'phone_number',
        ];
    }
    
    public function messages(){
        return [
            "Nombre_Equipo.required" => "El :attribute es un parametro requerido",
            "categoria.required" => "El :attribute es un parametro requerido",
            "entrenador.required" => "El :attribute es un parametro requerido",
            "phone_number.required" => "El :attribute es un parametro requerido",
        ];
       }
}
