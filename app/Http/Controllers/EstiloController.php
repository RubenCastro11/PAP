<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilo;

class EstiloController extends Controller
{
    //
    public function index(){
        $estilo=Estilo::all();
        return view('estilo.index',[
            'estilos'=>$estilo
        ]);
    }
   
    public function show(Request $request){
        $idestilo=$request->id_estilo;
       $estilo=Estilo::where('id_estilo',$idestilo)->first();
         return view('estilo.show',[
            'estilos'=>$estilo
         ]);

    }
}
