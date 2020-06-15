<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trasporte;
use App\Encargado;
use App\Estudiante;
use App\Madre;
use App\Papa;
use App\Reporte_medico;
use App\Empleado;
use App\Maestro;
use App\Seccion;
use DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Requests\PapaRequest;

use App\Http\Requests\EncargadoRequest;
use App\Http\Requests\TransporteRequest;
use App\Http\Requests\EstudianteRequest;




class EstudianteController extends Controller
{
    

    //modulo de estudiantes
    public function inicio(){

        $estudiantes = DB::table('estudiantes')
        ->join('seccions', 'estudiantes.id_seccion', '=', 'seccions.id')
        ->select('estudiantes.*','seccions.nivel','seccions.seccion','seccions.id_maestro')
        ->get();

/* $estudiantes = DB::table('estudiantes')
        ->select('estudiantes.*')
        ->where('equipo_id',$id)
        ->get();  */

    return view('estudiantes.index',compact('estudiantes'));

    }


    public function detalles_estudiante($id){
    
        $estudiantes = DB::table('estudiantes')
                ->join('encargados', 'estudiantes.id_encargado', '=', 'encargados.id')
                ->join('trasportes', 'estudiantes.id_transporte', '=', 'trasportes.id')
                ->join('papas', 'estudiantes.id_papa', '=', 'papas.id')
                ->join('madres', 'estudiantes.id_mama', '=', 'madres.id')
                ->join('seccions', 'estudiantes.id_seccion', '=', 'seccions.id')
                ->select('estudiantes.*', 'encargados.*', 'trasportes.*','papas.*','madres.*','seccions.*')
            
                ->where('estudiantes.id',$id)
                ->get();
    
            return view('estudiantes.detalles',compact('estudiantes'));
    
      }



    public function crear(){

        return view('estudiantes.crear');
    }




    public function creado(EstudianteRequest $request){

            if ($request->hasfile('foto')) {
                $file = $request->file('foto');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/imagenes',$name);
                
                
            }

        $estudiante = new Estudiante();
        $estudiante->nombre_estudiante = $request->nombre;
        $estudiante->foto = $name;
        $estudiante->apellido_estudiante = $request->apellido;
        $estudiante->codigo_estudiante = $request->cedula;
        $estudiante->sexo_estudiante= $request->sexo;
        $estudiante->fecha_nacimiento_estudiante = $request->fecha;
        $estudiante->id_transporte = $request->id_transporte;
        $estudiante->id_encargado = $request->id_encargado;
        $estudiante->id_seccion = $request->id_seccion;
        $estudiante->id_papa = $request->id_papa;
        $estudiante->id_mama = $request->id_mama; 
        $estudiante->peso = $request->peso;
        $estudiante->talla = $request->talla;
        $estudiante->lugar_de_nacimiento = $request->lugar;
        $estudiante->targeta_de_vacunacion = $request->vacuna;
        $estudiante->alergias = $request->alergia;
        $estudiante->tipo_sangre = $request->sangre;
        $estudiante->discapacidad = $request->discapacidad;
        $estudiante->operaciones= $request->operaciones;
        $estudiante->direccion_estudiante = $request->direccion_estudiante;
        $estudiante->save();
        return redirect('/estudiantes');
        
    }


    public function mostrar_seccion($id){
        
        $estudiantes = DB::table('estudiantes')
        ->join('encargados', 'estudiantes.id_encargado', '=', 'encargados.id')
        ->join('seccions', 'estudiantes.id_seccion', '=', 'seccions.id')
        ->select('estudiantes.*')
        ->where('seccions.id',$id)
        ->get();

        $profesor = Maestro::findOrfail($id);
        $salon = Seccion::findOrfail($id);

        /* $estudiantes = DB::table('estudiantes')
        ->select('estudiantes.*')
        ->where('equipo_id',$id)
        ->get();  */

    return view('seccion.inicio',compact('estudiantes','profesor','salon'),['id'=>$id],);

    }

    //modulo de Mama
    
    public function crear_mama(){

        return view('mama.create');
    }


    public function creados_mama(PapaRequest $request){

        $mama = new Madre();
        $mama->nombre_mama = $request->nombre;
        $mama->apellido_mama = $request->apellido;
        $mama->cedula_mama = $request->cedula;
        $mama->telefono_mama =$request->telefono;
        $mama->FN_mama = $request->fecha;
        $mama->trabajo_de_mama = $request->trabajo;
        
        

        $mama->save();
        return redirect('/estudiantes/crear');
        
    }


//modulo de papa

    public function crear_papa(){

        return view('papa.create');
    }


    public function creados_papa(PapaRequest $request){

        $papa = new Papa();
        $papa->nombre_papa = $request->nombre;
        $papa->apellido_papa = $request->apellido;
        $papa->cedula_papa = $request->cedula;
        $papa->telefono_papa =$request->telefono;
        $papa->FN_papa = $request->fecha;
        $papa->trabajo_de_papa = $request->trabajo;
        
        

        $papa->save();
        return redirect('/estudiantes/crear');
        
    }

  /*   //modulo de medico
    public function crear_medico(){

        return view('medico.crear');
    }


    public function creados_medico(Request $request){

        $medico = new Reporte_medico();
        $medico->codigo = $request->codigo;
       
        
        $medico->save();
        return redirect('/estudiantes/crear');
        
    } */

    //modulo de transporte

    public function crear_transporte(){

        return view('transporte.crear');
    }

    
    public function creados_transporte(TransporteRequest $request){

        $trasporte = new Trasporte();
        $trasporte->nombre_transporte = $request->nombre;
        $trasporte->apellido_transporte = $request->apellido;
        $trasporte->cedula_transporte = $request->cedula;
        $trasporte->telefono_transporte= $request->telefono;
        $trasporte->direcion_transporte = $request->direccion_transporte;
         $trasporte->save();
        return redirect('/estudiantes/crear');
        
    }

        //modulo de encargado
    public function crear_encargados( ){

        return view('encargados.crear'); 
    }

    public function creados_encargados(EncargadoRequest $request){

        $encargado = new Encargado();
        $encargado->nombre_encargado = $request->nombre;
        $encargado->apelldio_encargado = $request->apellido;
        $encargado->cedula_encargado = $request->cedula;
        $encargado->telefono_encargado= $request->telefono;
        $encargado->parentesco = $request->parentesco;
        $encargado->direcion_encargado = $request->direccion_encargado;
        $encargado->save();
        return redirect('/estudiantes/crear');
        
    }



    //personal 

    public function ver_personal(){

        $empleados =  Empleado::all();
        $maestros = Maestro::all();

        return view(' personal.index',compact('empleados','maestros'));

    }




    ////Reportes

 
    public function reportes(){

        return view('reportes.principal');

 
    }


    public function crear_reporte_estudiante($id){

        $estudiantes = DB::table('estudiantes')
                ->join('encargados', 'estudiantes.id_encargado', '=', 'encargados.id')
                ->join('trasportes', 'estudiantes.id_transporte', '=', 'trasportes.id')
                ->join('papas', 'estudiantes.id_papa', '=', 'papas.id')
                ->join('madres', 'estudiantes.id_mama', '=', 'madres.id')
                ->join('seccions', 'estudiantes.id_seccion', '=', 'seccions.id')
                ->select('estudiantes.*', 'encargados.nombre_encargado', 'trasportes.nombre_transporte','papas.nombre_papa','madres.nombre_mama','seccions.nivel')
            
                ->where('estudiantes.id',$id)
                ->get();
        $pdf = PDF::loadView('reportes.index',compact('estudiantes'));
        

    
        return $pdf->stream();
    }
    

    public function reporte_seccion1(){

         $estudiantes = DB::table('estudiantes')
                ->join('encargados', 'estudiantes.id_encargado', '=', 'encargados.id')
                ->join('seccions', 'estudiantes.id_seccion', '=', 'seccions.id')
                ->select('estudiantes.*','seccions.nivel')
            
                ->where('seccions.id',1)
                ->get(); 
        $pdf = PDF::loadView('reportes.primero',compact('estudiantes'));

        return $pdf->stream();
    }


    public function reporte_seccion2(){

        $estudiantes = DB::table('estudiantes')
               ->join('encargados', 'estudiantes.id_encargado', '=', 'encargados.id')
               ->join('seccions', 'estudiantes.id_seccion', '=', 'seccions.id')
               ->select('estudiantes.*','seccions.nivel')
           
               ->where('seccions.id',2)
               ->get(); 
       $pdf = PDF::loadView('reportes.primero',compact('estudiantes'));

       return $pdf->stream();
   }



   public function reporte_seccion3(){

    $estudiantes = DB::table('estudiantes')
           ->join('encargados', 'estudiantes.id_encargado', '=', 'encargados.id')
           ->join('seccions', 'estudiantes.id_seccion', '=', 'seccions.id')
           ->select('estudiantes.*','seccions.nivel')
       
           ->where('seccions.id',3)
           ->get(); 
   $pdf = PDF::loadView('reportes.primero',compact('estudiantes'));

   return $pdf->stream();
}




}
