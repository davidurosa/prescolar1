<?php

use Illuminate\Database\Seeder;
use App\Empleado;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleados = new Empleado();
        $empleados->nombre_empleado = "Leonardo";
        $empleados->apellido_empleado = "Peña";
        $empleados->cedula_empleado = 6135474;
        $empleados->cargo_empleado = "Director";
        $empleados->fn_empleado = "1962-02-02";
        $empleados->telefono_empleado = "041258999";
        $empleados->save();



        $empleados = new Empleado();
        $empleados->nombre_empleado = "Maria";
        $empleados->apellido_empleado = "Gonzales";
        $empleados->cedula_empleado = 6458975;
        $empleados->cargo_empleado = "Sub Director";
        $empleados->fn_empleado = "1963-02-02";
        $empleados->telefono_empleado = "0414896357";
        $empleados->save();

        $empleados = new Empleado();
        $empleados->nombre_empleado = "Pero";
        $empleados->apellido_empleado = "Perez";
        $empleados->cedula_empleado = 14785963;
        $empleados->cargo_empleado = "Cocinero";
        $empleados->fn_empleado = "1982-02-02";
        $empleados->telefono_empleado = "04268947572";
        $empleados->save();


        $empleados = new Empleado();
        $empleados->nombre_empleado = "Sofia";
        $empleados->apellido_empleado = "Adam";
        $empleados->cedula_empleado = 6458123;
        $empleados->cargo_empleado = "secretaria";
        $empleados->fn_empleado = "1994-02-02";
        $empleados->telefono_empleado = "0414478357";
        $empleados->save();

        $empleados = new Empleado();
        $empleados->nombre_empleado = "Marcos";
        $empleados->apellido_empleado = "Polo";
        $empleados->cedula_empleado = 18745345;
        $empleados->cargo_empleado = "Portero";
        $empleados->fn_empleado = "1987-02-02";
        $empleados->telefono_empleado = "0414478558";
        $empleados->save();

        $empleados = new Empleado();
        $empleados->nombre_empleado = "Miguel";
        $empleados->apellido_empleado = "Mendoza";
        $empleados->cedula_empleado = 18745963;
        $empleados->cargo_empleado = "Obrero";
        $empleados->fn_empleado = "1987-02-02";
        $empleados->telefono_empleado = "0414478558";
        $empleados->save();

    }
}
