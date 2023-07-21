<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        
        return"hola";
      //  return view('cursos.index');
    }


    public function create(){
        return view('cursos.create');
    }


    public function store(Request $request){
        
      $curso=new Curso();
       $curso->name=$request->name;
      $curso->descripcion=$request->descripcion;
      //ADJUNTAR EL PDF
      $file=$request->file("urlPdf");
      $nombreArchivo = "pdf_".time().".".$file->guessExtension();
      $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
      $curso->urlPdf = $nombreArchivo;
      $curso->save();
   
    }

    public function show($curso){
        // return view('cursos.show',['pedro'=>$curso]);

        return view('cursos.show',compact('curso'));
    }



    // public function show($curso,$param2=null){

    //     if($param2){
    //         return "hola desde $curso de $param2";
    //     }
    //     else
    //     return "hola desde $curso";
    // }

   

}
