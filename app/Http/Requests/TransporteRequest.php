<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransporteRequest extends FormRequest
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
            'nombre' => 'required|max:25|min:3',
            'apellido' => 'required|max:25',
            'cedula' => 'required|max:8|min:7',
            'telefono' => 'required',
            'direccion_transporte'=> 'required',
        ];
    }
}
