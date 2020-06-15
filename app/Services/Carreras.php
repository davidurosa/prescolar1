<?php

namespace App\Services;

use App\Carrera;

class Carreras
{
    public function get()
    {
        $carreras = Carrera::get();
        $carrerasArray[''] = 'Selecciona una carrera';
        foreach ($carreras as $carrera) {
            $carrerasArray[$carrera->id] = $carrera->nombre_carrera;
        }
        return $carrerasArray;
    }
}