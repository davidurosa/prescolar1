<?php

use Illuminate\Database\Seeder;
use App\Seccion;

class SeccionesTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $secciones = new Seccion();
       $secciones->nivel = "primer nivel";
       $secciones->seccion = "A";
       $secciones->id_maestro = 1;
       $secciones->save();


       $secciones = new Seccion();
       $secciones->nivel = "segundo nivel";
       $secciones->seccion = "A";
       $secciones->id_maestro = 2;
       $secciones->save();

       $secciones = new Seccion();
       $secciones->nivel = "tercer nivel";
       $secciones->seccion = "A";
       $secciones->id_maestro = 3;
       $secciones->save();



    }
}
