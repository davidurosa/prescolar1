<?php

namespace App\Services;

use App\Encargado;

class Encargadoss
{
    public function get()
    {
        $encargadoss = Encargado::get();
        $encargadoArreglo[''] = 'Selecciona un encargado';
        foreach ($encargadoss as $encargado) {
            $encargadoArreglo[$encargado->id] = $encargado->apelldio_encargado;
        }
        return $encargadoArreglo;
    }
}