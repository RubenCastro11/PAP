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
        $estilo=Estilo::where('id_estilo',$idestilo)->first();
         return view('estilo.show',[
            'estilo'=>$estilo
         ]);
   {
    public function create(){
         return view('estilo.create');
    }
    public function store(Request $reuqest){
        $novoEstilo =$request->validate([
            
        ])
         
    }   
       
            
   }
    
             
}
