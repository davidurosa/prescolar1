<?php

namespace App\Services;

use App\Madre;

class Mamas
{
    public function get()
    {
        $madres = Madre::get();
        $carrerasArray[''] = 'Seleccionar Mama';
        foreach ($madres as $mama) {
            $carrerasArray[$mama->id] = $mama->cedula_mama;
        }
        return $carrerasArray;
    }
}