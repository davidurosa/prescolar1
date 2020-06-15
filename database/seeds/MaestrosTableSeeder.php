<?php

use Illuminate\Database\Seeder;
use App\Maestro;

class MaestrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $maestros = new Maestro();
        $maestros->nombre_maestro = "Daniel";
        $maestros->apellido_maestro = "perez";
        $maestros->cedula_maestro = 22474896;
        $maestros->cargo = "Profesor";
        $maestros->fecha_nacimiento_maestro = "1994-02-02";
        $maestros->telefono_maestro = "041258974";
        $maestros->save();



        $maestros = new Maestro();
        $maestros->nombre_maestro = "Sofia";
        $maestros->apellido_maestro = "Vergara";
        $maestros->cedula_maestro = 19477896;
        $maestros->cargo = "Profesor";
        $maestros->fecha_nacimiento_maestro = "1990-02-02";
        $maestros->telefono_maestro = "041258999";
        $maestros->save();


        $maestros = new Maestro();
        $maestros->nombre_maestro = "Stefania";
        $maestros->apellido_maestro = "Peña";
        $maestros->cedula_maestro = 18454071;
        $maestros->cargo = "Profesor";
        $maestros->fecha_nacimiento_maestro = "1990-02-02";
        $maestros->telefono_maestro = "0414896523";
        $maestros->save();
                            

    }
}
