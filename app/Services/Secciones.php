<?php

namespace App\Services;

use App\Seccion;

class Secciones
{
    public function get()
    {
        
        $secciones = Seccion::get();
        $aulasarreglo[''] = 'Selecciona el Nivel Del estudiante';
        foreach ($secciones as $seccion) {
            $aulasarreglo[$seccion->id] = $seccion->nivel;
        }
        return $aulasarreglo;

    }
}