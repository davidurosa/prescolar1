<?php

namespace App\Services;

use App\Papa;

class Papas
{
    public function get()
    {
        $papas = Papa::get();
        $carrerasArray[''] = 'Seleccionar Papa';
        foreach ($papas as $papa) {
            $carrerasArray[$papa->id] = $papa->cedula_papa;
        }
        return $carrerasArray;
    }
    
}