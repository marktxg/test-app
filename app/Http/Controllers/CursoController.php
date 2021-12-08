<?php

namespace App\Http\Controllers;

use App\Models\Course_Tabla;
use App\Models\Topic_Tabla;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //por convenciòn los mètodos son: 
    //index para mostrar todos
    public function index(){
        $cursos = Course_Tabla::all();
        return view('paginas.cursos.index', compact('cursos'));
    }
    
    //create para crar uno nuevo
    public function create(){return view('paginas.cursos.create');}
    
    //show para mostrar uno especìfico
    public function show($idCourse){
        $curso = Course_Tabla::find($idCourse);
        $desc = Topic_Tabla::where('idCourse',$idCourse)->get();
        return view('paginas.cursos.show',compact('desc','curso'));
    }
}
