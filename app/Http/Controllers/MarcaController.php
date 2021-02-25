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
}
