<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteRequest extends FormRequest
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
            'fecha' => 'required|date|before:2018/01/01|after:2015/01/01',
            'peso' => 'required|max:2|min:1',
            'talla' => 'required|max:2|min:1',
            'lugar' => 'required|max:25|min:3',
            'alergia' => 'required|max:200|min:3',
            'sangre' => 'required|max:15|min:1',
            'discapacidad' => 'required|max:200|min:3',
            'operaciones' => 'required|max:200|min:3',

        ];


       
    }
}
