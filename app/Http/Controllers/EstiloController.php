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
    public function create(){
        return view('estilo.create');
    }
    public function store(Request $req){
        $novoEstilo=$req->validate([
            'nome'=>['required','min:3','max:50']
        ]);
        $estilo=Estilo::create($novoEstilo);
        return redirect()->route('estilos.show',[
            'id_estilo'=>$estilo->id_estilo
            
        ]);
    }
    
}
