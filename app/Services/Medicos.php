<?php

namespace App\Services;

use App\Reporte_medico;

class Medicos
{
    public function get()
    {
        $medicos = Reporte_medico::get();
        $carrerasArray[''] = 'Seleccionar Reporte Medico';
        foreach ($medicos as $medico) {
            $carrerasArray[$medico->id] = $medico->codigo;
        }
        return $carrerasArray;
    }
}