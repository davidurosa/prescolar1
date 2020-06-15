<?php

namespace App\Services;

use App\Trasporte;

class Transporte
{
    public function get()
    {
        $trasportes = Trasporte::get();
        $trasporteArreglo[''] = 'Selecciona un trasporte';
        foreach ($trasportes as $trasporte) {
            $trasporteArreglo[$trasporte->id] = $trasporte->nombre_transporte;
        }
        return $trasporteArreglo;
    }
}