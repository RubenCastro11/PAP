<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    //
     public function index(){
        $marcas=Marca::all();
        return view('marca.index',[
            'marcas'=>$marcas
        ]);
    }
    public function show(Request $request){
        $idmarca=$request->id;
        $marca=Marca::where('id_marca',$idmarca)->first();
         return view('marca.show',[
            'marca'=>$marca
       ]);    
    }
    public function create(){
        return view('marca.create');
    }
    public function store(Request $req){
        $novoMarca =$req->validate([
            'nome'=>['required','min:3','max:25'],
            'origem_marca'=>['nullable','min:3','max:20'],
            'ano_criacao'=>['nullable','min:3','max:4'],
            'logotigo'=>['nullable','min:3','max:255']     
        ]);
        $marca = Marca::create($novoMarca);
        return redirect()->route('marcas.show',[
            'id'=>$marca->id_marca       
        ]);
    }
}
