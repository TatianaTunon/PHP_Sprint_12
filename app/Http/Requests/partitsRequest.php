<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class partitsRequest extends FormRequest
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
            'equip1_id' => 'required | max:255',
            'equip2_id' => 'required | max:255',
            'date' => 'required | max:255',
            'resultado' => 'required | max:255',
        ];
    }
    public function attributes() {
        return [
            'equip1_id' => 'equip1_id',
            'equip2_id' => 'equip2_id',
            'date' => 'date',
            'resultado' => 'resultado',
        ];
    }
    
    public function messages(){
        return [
            "equip1_id.required" => "El :attribute es un parametro requerido",
            "equip2_id.required" => "El :attribute es un parametro requerido",
            "date.required" => "El :attribute es un parametro requerido",
            "resultado.required" => "El :attribute es un parametro requerido",
        ];
       }
}
