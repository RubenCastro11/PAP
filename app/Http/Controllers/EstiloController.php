<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilo;

class EstiloController extends Controller
{
    //
    public function index(){
        $estilo=Estilo::all();
        return view('estilos.index',[
            'estilos'=>$estilos
        ]);
    }
   
//    public function show(Request $request){
//        $idestilos=request->id;
//        $estilos=Estilos::where('id_estilo',$idestilos)->first();
//         return view('estilos.show',[
//            'estilos'=>$estilos
//         ]);
//   {
//    public function create(){
//         return view('estilos.create');
//    }
//    public function store(Request $request){
//        
//        $novoEstilo =$request->validate([
//         'nome'=>['required','min:3','max:50']     
//            
//        ]);
//        $estilo = Estilos::create($novoEstilo);
//        
//        return redirect()->route('estilos.show',[
//            'id'=>$estilo->id_estilo
//        ]);   
//    }
//    public function edit (Request $request){
//        
//    }   
//       
//            
//   }
    
             
}
