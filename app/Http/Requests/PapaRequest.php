<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Papa;
class PapaRequest extends FormRequest
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
             'fecha' => 'required|date|before:2005/01/01|after:1920/01/01'
            ,'trabajo' => 'required|max:200',
            'telefono' => 'required'

        
        ];
    }
}
