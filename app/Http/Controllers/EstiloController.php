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
            'estilo'=>$estilo
        ]);
    }
    public function show(Request $request){
        $idestilo=request->id;
        $estilo=Estilo::where('id_estilo',$idestilo)->with('estilo')->first();
         return view('estilo.show',[
            'estilo'=>$estilo
    }
             
}
